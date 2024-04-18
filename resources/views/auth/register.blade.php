<x-layouts.guest>
    <x-slot name="title">Register</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Register">
    </x-slot>

    <!-- Sign Up -->
    <div class="techwave_fn_sign">

        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form method="POST" action="{{ route('register') }}" class="signup">
                @csrf
                <div class="form__content">
                    <div class="form__title">Sign Up</div>
                    <div class="form__name">
                        <label for="name">Name <span>*</span></label>
                        <input type="text" class="input" id="name" name="name" placeholder="Enter your name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="input-error" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="form__email">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" class="input" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="yourmail@example.com">
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
                            <input type="submit" name="submit" value="Create Account">
                        </label>
                    </div>
                    <div class="form__alternative">
                        <div class="fn__lined_text">
                            <div class="line"></div>
                            <div class="text">Or</div>
                            <div class="line"></div>
                        </div>
                        <a href="javascript:void(0);" class="techwave_fn_button"><span>Sign up with Google</span></a>
                    </div>
                </div>
            </form>
            <div class="sign__desc">
                <p>Don't have an account? <a href="{{ route('login') }}">Sign In</a></p>
            </div>
        </div>

    </div>
    <!-- !Sign Up -->

</x-layouts.guest>
