<x-layouts.guest>
    <x-slot name="title">Register</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Register">
    </x-slot>

    <!-- Sign Up -->
    <div class="techwave_fn_sign">

        <div class="sign__content">
            <h1 class="logo"></h1>
            <form class="signup">
                <div class="form__content">
                    <div class="form__title">Sign Up</div>
                    <div class="form__name">
                        <label for="name">Name</label>
                        <input type="text" class="input" id="name" placeholder="Full Name">
                    </div>
                    <div class="form__username">
                        <label for="username">Username</label>
                        <input type="text" class="input" id="username" placeholder="Username">
                    </div>
                    <div class="form__email">
                        <label for="email">Username</label>
                        <input type="text" class="input" id="email" placeholder="yourmail@example.com">
                    </div>
                    <div class="form__pass">
                        <label for="user_password">Password</label>
                        <input type="password" id="user_password" autocomplete="current-password" spellcheck="false">
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
                <p>Don't have an account? <a href="{{ url('/sign-in') }}">Sign In</a></p>
            </div>
        </div>

    </div>
    <!-- !Sign Up -->
</x-layouts.guest>
