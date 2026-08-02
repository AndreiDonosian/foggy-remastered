<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function info()
    {
        echo view('user/info');
    }

    public function settings()
    {
        echo view('user/settings');
    }

    /**
     * Update the profile name and/or avatar.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
        ]);

        $user = $request->user();
        $user->name = $validated['name'];

        if ($request->hasFile('avatar')) {
            // Remove the previous avatar if it lives on the public disk.
            if ($user->avatar && str_starts_with($user->avatar, '/storage/avatars/')) {
                Storage::disk('public')->delete(str_replace('/storage/', '', $user->avatar));
            }

            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = Storage::url($path);
        }

        $user->save();

        return back()->with('status', __('Your profile has been updated.'));
    }

    /**
     * Request an email change. The new address must be activated before it
     * replaces the current one. Users may change their email once per month.
     */
    public function updateEmail(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email'),
            ],
        ]);

        $user = $request->user();
        $newEmail = $validated['email'];

        if (strcasecmp($newEmail, $user->email) === 0) {
            return back()->withErrors([
                'email' => __('This is already your current email address.'),
            ]);
        }

        $lastChange = UserEmail::query()
            ->where('user_id', $user->id)
            ->latest('created_at')
            ->first();

        if ($lastChange && $lastChange->created_at && $lastChange->created_at->greaterThan(now()->subMonth())) {
            return back()->withErrors([
                'email' => __('You can only change your email once a month. Try again after :date.', [
                    'date' => $lastChange->created_at->copy()->addMonth()->toDateString(),
                ]),
            ]);
        }

        $activationUrl = URL::temporarySignedRoute(
            'profile.email.activate',
            now()->addDay(),
            ['user' => $user->id, 'email' => $newEmail]
        );

        try {
            Mail::raw(
                __('To confirm your new email address, please open the link below:') . "\n\n" . $activationUrl,
                function ($mail) use ($newEmail) {
                    $mail->to($newEmail)
                        ->subject(__('Confirm your new email address'));
                }
            );
        } catch (\Throwable $e) {
            report($e);

            return back()->withErrors([
                'email' => __('We could not send the confirmation email right now. Please try again later.'),
            ]);
        }

        return back()->with('status', __('A confirmation link has been sent to :email. Please open it to activate your new address.', [
            'email' => $newEmail,
        ]));
    }

    /**
     * Activate a new email address from the signed link sent by email.
     */
    public function activateEmail(Request $request, int $user): RedirectResponse
    {
        $newEmail = (string) $request->query('email');

        /** @var User|null $account */
        $account = User::query()->find($user);

        if (! $account) {
            abort(404);
        }

        // Re-check availability in case the address was taken meanwhile.
        $taken = User::query()
            ->where('email', $newEmail)
            ->where('id', '!=', $account->id)
            ->exists();

        if ($taken) {
            return redirect('/profile/settings')->withErrors([
                'email' => __('That email address is no longer available.'),
            ]);
        }

        // Enforce the once-a-month rule again to avoid abuse of stale links.
        $lastChange = UserEmail::query()
            ->where('user_id', $account->id)
            ->latest('created_at')
            ->first();

        if ($lastChange && $lastChange->created_at && $lastChange->created_at->greaterThan(now()->subMonth())) {
            return redirect('/profile/settings')->withErrors([
                'email' => __('You can only change your email once a month.'),
            ]);
        }

        $account->email = $newEmail;
        $account->email_verified_at = now();
        $account->save();

        UserEmail::query()->create([
            'user_id' => $account->id,
            'email' => $newEmail,
            'created_at' => Carbon::now(),
        ]);

        return redirect('/profile/settings')->with('status', __('Your email address has been updated.'));
    }

    /**
     * Send a password reset link to the current user. Passwords can only be
     * changed through the emailed recovery link, not from the cabinet.
     */
    public function sendPasswordReset(Request $request): RedirectResponse
    {
        $status = Password::sendResetLink(['email' => $request->user()->email]);

        if ($status === Password::RESET_LINK_SENT) {
            return back()->with('status', __('A password reset link has been sent to your email.'));
        }

        return back()->withErrors([
            'password' => __('We could not send the password reset link. Please try again later.'),
        ]);
    }
}