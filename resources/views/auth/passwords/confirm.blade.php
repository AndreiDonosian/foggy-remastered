<x-layouts.guest>
    <x-slot name="title">Confirm Password</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Confirm Password">
    </x-slot>

    <!-- Sign In -->
    <div class="techwave_fn_sign">
        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form method="POST" action="{{ route('password.confirm') }}" class="login">
                @csrf

                <div class="form__content">
                    <div class="form__title">Confirm Password</div>

                    <p>{{ __('Please confirm your password before continuing.') }}</p>

                    <div class="form__pass">
                        @if (Route::has('password.request'))
                            <div class="pass_lab">
                                <label for="user_password">Password <span>*</span></label>
                                <a href="{{ route('password.request') }}">Forget Password?</a>
                            </div>
                        @endif
                        <input type="password" id="user_password" autocomplete="current-password" name="password"
                            spellcheck="false" required placeholder="Enter your password">
                        @error('password')
                            <span class="input-error" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="form__submit">
                        <label class="fn__submit">
                            <input type="submit" name="submit" value="Confirm Password">
                        </label>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- !Sign In -->
</x-layouts.guest>
