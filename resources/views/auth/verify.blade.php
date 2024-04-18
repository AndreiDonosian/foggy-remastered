<x-layouts.guest>
    <x-slot name="title">Email Verification</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Email Verification">
    </x-slot>

    <!-- Sign In -->
    <div class="techwave_fn_sign">
        <div class="sign__content">
            <h1 class="logo">Designed by Frenify</h1>
            <form method="POST" action="{{ route('verification.resend') }}" class="login">
                @csrf

                <div class="form__content">
                    <h4>Email Verification</h4>

                    @if (session('resent'))
                        <div class="success-alert" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>
                        {{ __('If you did not receive the email') }},
                    </p>

                    <div class="form__submit">
                        <label class="fn__submit">
                            <input type="submit" name="submit" value="click here to request another">
                        </label>
                    </div>

                </div>
            </form>
            <div class="sign__desc">
                <p>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/logout.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Log Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </p>
            </div>
        </div>

    </div>
    <!-- !Sign In -->
</x-layouts.guest>
