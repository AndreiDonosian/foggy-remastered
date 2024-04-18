<x-layouts.guest>
    <x-slot name="title">Login</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Login">
    </x-slot>

    <!-- Sign In -->
    <div class="techwave_fn_sign">

        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form class="login">
                <div class="form__content">
                    <div class="form__title">Sign In</div>
                    <div class="form__username">
                        <label for="user_login">Username or Email</label>
                        <input type="text" class="input" id="user_login" autocapitalize="off"
                            autocomplete="username" aria-describedby="login-message">
                    </div>
                    <div class="form__pass">
                        <div class="pass_lab">
                            <label for="user_password">Password</label>
                            <a href="javascript:void(0);">Forget Password?</a>
                        </div>
                        <input type="password" id="user_password" autocomplete="current-password" spellcheck="false">
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
                <p>Not a member? <a href="{{ url('/sign-up') }}">Sign Up</a></p>
            </div>
        </div>

    </div>
    <!-- !Sign In -->

</x-layouts.guest>
