<x-layouts.auth>
    <x-slot name="title">User Profile</x-slot>
    <x-slot name="meta">
        <meta name="description" content="User Profile">
    </x-slot>

    <!-- User Profile Page -->
    <div class="techwave_fn_user_profile_page">
        <!-- Page Title -->
        <div class="techwave_fn_pagetitle">
            <h2 class="title">User Profile</h2>
        </div>
        <!-- !Page Title -->

        <div class="container small">
            <div class="techwave_fn_user_profile">

                <div class="user__profile">
                    <div class="user_avatar">
                        <img src="{{ Auth::user()->avatar??URL::asset('build/img/user/user.jpg') }}" alt="">
                    </div>
                    <div class="user_details">
                        <ul>
                            <li>
                                <div class="item">
                                    <h4 class="subtitle">Name</h4>
                                    <h3 class="title">{{Auth::user()->name}}</h3>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <h4 class="subtitle">Email Address</h4>
                                    <h3 class="title">{{Auth::user()->email}}</h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ url('/profile/settings') }}" class="user_edit fn__icon_button">
                        <img src="{{ URL::asset('build/svg/setting.svg') }}" alt="" class="fn__svg">
                    </a>
                </div>

                <div class="user__plan">
                    <div class="plan_left">
                        <h4 class="subtitle">{{__('user.Your Plan')}}</h4>
                        <p class="info"><span>{{\Illuminate\Support\Facades\Auth::user()->getPlan()->name}}</span> <br/> {{\Illuminate\Support\Facades\Auth::user()->getPlan()->description}}</p>
                    </div>
                    <div class="plan_right">
                        <a href="{{ url('/pricing') }}" class="token_upgrade techwave_fn_button"><span>Upgrade</span></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- !User Profile Page -->
</x-layouts.auth>