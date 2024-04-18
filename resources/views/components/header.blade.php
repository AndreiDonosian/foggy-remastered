<header class="techwave_fn_header">

    <!-- Header left: token information -->
    <div class="header__left">
        <div class="fn__token_info">
            <span class="token_summary">
                <span class="count">120</span>
                <span class="text">Tokens<br>Remain</span>
            </span>
            <a href="{{ url('/pricing') }}" class="token_upgrade techwave_fn_button"><span>Upgrade</span></a>
            <div class="token__popup">
                Resets in <span>19 hours.</span><br>
                Daily limit is <span>200 tokens</span>
            </div>
        </div>
    </div>
    <!-- /Header left: token information -->


    <!-- Header right: navigation bar -->
    <div class="header__right">
        <div class="fn__nav_bar">

            <!-- Search (bar item) -->
            <div class="bar__item bar__item_search">
                <a href="javascript:void(0);" class="item_opener fn__tooltip" title="Search">
                    <img src="{{ URL::asset('build/svg/search.svg') }}" alt="" class="fn__svg">
                </a>
                <div class="item_popup" data-position="right">
                    <input type="text" placeholder="Search">
                </div>
            </div>
            <!-- !Search (bar item) -->

            <!-- Notification (bar item) -->
            <div class="bar__item bar__item_notification has_notification">
                <a href="javascript:void(0);" class="item_opener fn__tooltip" title="Notifications">
                    <img src="{{ URL::asset('build/svg/bell.svg') }}" alt="" class="fn__svg">
                </a>
                <div class="item_popup" data-position="right">
                    <div class="ntfc_header">
                        <h2 class="ntfc_title">Notifications</h2>
                        <a href="{{ url('/notifications') }}">View All</a>
                    </div>
                    <div class="ntfc_list">
                        <ul>
                            <li>
                                <p><a href="{{ url('/notification-single') }}">Version 4.1.2 has been launched</a></p>
                                <span>34 Min Ago</span>
                            </li>
                            <li>
                                <p><a href="{{ url('/notification-single') }}">Video Generation has been released</a></p>
                                <span>12 Apr</span>
                            </li>
                            <li>
                                <p><a href="{{ url('/notification-single') }}">Terms has been updated</a></p>
                                <span>12 Apr</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- !Notification (bar item) -->

            <!-- Full Screen (bar item) -->
            <div class="bar__item bar__item_fullscreen">
                <a href="javascript:void(0);" class="item_opener fn__tooltip" title="Full Screen">
                    <img src="{{ URL::asset('build/svg/fullscreen.svg') }}" alt="" class="fn__svg f_screen">
                    <img src="{{ URL::asset('build/svg/smallscreen.svg') }}" alt="" class="fn__svg s_screen">
                </a>
            </div>
            <!-- !Full Screen (bar item) -->

            <!-- Language (bar item) -->
            <div class="bar__item bar__item_language">
                <a href="javascript:void(0);" class="item_opener fn__tooltip" title="Language">
                    <img src="{{ URL::asset('build/svg/language.svg') }}" alt="" class="fn__svg">
                </a>
                <div class="item_popup" data-position="right">
                    <ul>
                        <li>
                            <span class="active">English</span>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Spanish</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">French</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- !Language (bar item) -->

            <!-- Site Skin (bar item) -->
            <div class="bar__item bar__item_skin">
                <a href="javascript:void(0);" class="item_opener fn__tooltip" title="Dark/Light">
                    <img src="{{ URL::asset('build/svg/sun.svg') }}" alt="" class="fn__svg light_mode">
                    <img src="{{ URL::asset('build/svg/moon.svg') }}" alt="" class="fn__svg dark_mode">
                </a>
            </div>
            <!-- !Site Skin (bar item) -->

            <!-- User (bar item) -->
            <div class="bar__item bar__item_user">
                <a href="javascript:void(0);" class="user_opener fn__tooltip" title="User Profile">
                    <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                </a>
                <div class="item_popup" data-position="right">
                    <div class="user_profile">
                        <div class="user_img">
                            <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                        </div>
                        <div class="user_info">
                            <h2 class="user_name">{{ Auth::user()->name }}<span>Free</span></h2>
                            <p><a href="mailto:{{ Auth::user()->email }}"
                                    class="user_email">{{ Auth::user()->email }}</a></p>
                        </div>
                    </div>
                    <div class="user_nav">
                        <ul>
                            <li>
                                <a href="{{ url('/user-profile') }}">
                                    <span class="icon"><img src="{{ URL::asset('build/svg/person.svg') }}" alt=""
                                            class="fn__svg"></span>
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/user-settings') }}">
                                    <span class="icon"><img src="{{ URL::asset('build/svg/setting.svg') }}" alt=""
                                            class="fn__svg"></span>
                                    <span class="text">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/user-billing') }}">
                                    <span class="icon"><img src="{{ URL::asset('build/svg/billing.svg') }}" alt=""
                                            class="fn__svg"></span>
                                    <span class="text">Billing</span>
                                </a>
                            </li>
                            <li>
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
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- !User (bar item) -->


        </div>
    </div>
    <!-- !Header right: navigation bar -->

</header>
