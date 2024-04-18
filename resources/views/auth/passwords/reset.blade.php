<x-layouts.guest>
    <x-slot name="title">Reset Password</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Reset Password">
    </x-slot>

    <!-- Sign Up -->
    <div class="techwave_fn_sign">

        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form method="POST" action="{{ route('password.update') }}" class="signup">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form__content">
                    <div class="form__title">Reset Password</div>
         
                    <div class="form__email">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" class="input" id="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" placeholder="yourmail@example.com">
                        @error('email')
                            <span class="input-error" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="form__pass">
                        <label for="user_password">Password <span>*</span></label>
                        <input type="password" id="user_password" name="password" required autocomplete="new-password" autocomplete="current-password" spellcheck="false" placeholder="Create a password">
                        @error('password')
                            <span class="input-error" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="form__pass">
                        <label for="password-confirm">Confirm Password <span>*</span></label>
                        <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" autocomplete="current-password" spellcheck="false" placeholder="Enter confirm password">
                    </div>
                    <div class="form__submit">
                        <label class="fn__submit">
                            <input type="submit" name="submit" value="Reset Password">
                        </label>
                    </div>
                </div>
            </form>
            <div class="sign__desc">
                <p>Remeber your password? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </div>

    </div>
    <!-- !Sign Up -->

</x-layouts.guest>
