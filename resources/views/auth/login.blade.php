<x-layouts.guest>
    <x-slot name="title">Login</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Login">
    </x-slot>

    <!-- Sign In -->
    <div class="techwave_fn_sign">
        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form method="POST" action="{{ route('login') }}" class="login">
                @csrf

                <div class="form__content">
                    <div class="form__title">Sign In</div>
                    <div class="form__username">
                        <label for="user_login">Email <span>*</span></label>
                        <input type="email" class="input" id="user_login" name="email" value="{{ old('email') }}" required
                            autocapitalize="off" autocomplete="username" aria-describedby="login-message"
                            placeholder="Enter your email">
                        @error('email')
                            <span class="input-error" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
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
                    <div class="form__check">
                        <label class="fn__checkbox" id="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                            <span class="checkmark"></span>
                            <img src="{{ URL::asset('build/svg/check.svg') }}" alt="" class="fn__svg">
                        </label>
                    </div>
                    <div class="form__submit">
                        <label class="fn__submit">
                            <input type="submit" name="submit" value="Sign In">
                        </label>
                    </div>
                    <div class="form__alternative">
                        <div class="fn__lined_text">
                            <div class="line"></div>
                            <div class="text">Or</div>
                            <div class="line"></div>
                        </div>
                        <a href="javascript:void(0);" class="techwave_fn_button"><span>Sign in with Google</span></a>
                    </div>
                </div>
            </form>
            <div class="sign__desc">
                <p>Not a member? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>
        </div>

    </div>
    <!-- !Sign In -->
</x-layouts.guest>
