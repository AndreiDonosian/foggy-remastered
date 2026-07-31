<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Handle a submission from the "Contact Us" form and deliver it by email.
     */
    public function submit(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tel' => 'nullable|string|max:50',
            'message' => 'required|string|max:5000',
        ]);

        $recipient = config('mail.contact_to') ?: config('mail.from.address');

        $lines = [
            'You have received a new message from the AVKS.cloud contact form.',
            '',
            'Name:    ' . $validated['name'],
            'Email:   ' . $validated['email'],
            'Phone:   ' . ($validated['tel'] ?? '—'),
            '',
            'Message:',
            $validated['message'],
        ];

        try {
            Mail::raw(implode("\n", $lines), function ($mail) use ($recipient, $validated) {
                $mail->to($recipient)
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject('New contact request from ' . $validated['name']);
            });
        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'success' => false,
                'message' => 'Sorry, we could not send your message right now. Please try again later or email us directly.',
            ], 500);
        }

        return response()->json([
            'success' => true,
            'message' => 'Your message has been received. We will contact you soon.',
        ]);
    }
}
