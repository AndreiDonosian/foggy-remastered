<x-layouts.guest>
    <x-slot name="title">Reset Password</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Reset Password">
    </x-slot>

    <!-- Sign In -->
    <div class="techwave_fn_sign">
        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form method="POST" action="{{ route('password.email') }}" class="login">
                @csrf

                <div class="form__content">
                    <div class="form__title">Reset Password</div>

                    @if (session('status'))
                        <div class="success-alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form__username">
                        <label for="user_login">Email <span>*</span></label>
                        <input type="email" class="input" id="user_login" name="email" value="{{ old('email') }}" required
                            autocapitalize="off" autocomplete="username" aria-describedby="login-message"
                            placeholder="Enter your registered email">
                        @error('email')
                            <span class="input-error" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="form__submit">
                        <label class="fn__submit">
                            <input type="submit" name="submit" value="Send Password Reset Link">
                        </label>
                    </div>
                </div>
            </form>
            <div class="sign__desc">
                <p>Remeber your password? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>

    </div>
    <!-- !Sign In -->
</x-layouts.guest>
