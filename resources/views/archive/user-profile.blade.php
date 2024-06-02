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
                    <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                </div>
                <div class="user_details">
                    <ul>
                        <li>
                            <div class="item">
                                <h4 class="subtitle">Name</h4>
                                <h3 class="title">Caden Smith</h3>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <h4 class="subtitle">Username</h4>
                                <h3 class="title">@caddeomyth</h3>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <h4 class="subtitle">Email Address</h4>
                                <h3 class="title">cadensmith@gmail.com</h3>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="{{ url('/user-settings') }}" class="user_edit fn__icon_button">
                    <img src="{{ URL::asset('build/svg/setting.svg') }}" alt="" class="fn__svg">
                </a>
            </div>

            <div class="user__plan">
                <div class="plan_left">
                    <h4 class="subtitle">Your Plan</h4>
                    <p class="info"><span>Personal Plan</span> - You will given 8000 tokens every month</p>
                </div>
                <div class="plan_right">
                    <a href="{{ url('/pricing') }}" class="token_upgrade techwave_fn_button"><span>Upgrade</span></a>
                </div>
            </div>

            <div class="user__interests">
                <h4 class="title">What are your interests?</h4>
                <div class="fn__options_list">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border enabled">
                                <span>Advertising</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Architecture</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Art</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Education</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Fashion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Film TV</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Interior</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border enabled">
                                <span>Marketing</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Graphics</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Games</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Stock Images</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="techwave_fn_button small__border disabled">
                                <span>Other</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    
</div>
<!-- !User Profile Page -->
</x-layouts.auth>