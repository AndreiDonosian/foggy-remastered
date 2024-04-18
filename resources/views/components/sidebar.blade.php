<div class="techwave_fn_leftpanel">

    <div class="mobile_extra_closer"></div>

    <!-- logo (left panel) -->
    <div class="leftpanel_logo">
        <a href="{{ url('/index') }}" class="fn_logo">
            <span class="full_logo">
                <img src="{{ URL::asset('build/img/logo-desktop-full.png') }}" alt="" class="desktop_logo">
                <img src="{{ URL::asset('build/img/logo-retina-full.png') }}" alt="" class="retina_logo">
            </span>
            <span class="short_logo">
                <img src="{{ URL::asset('build/img/logo-desktop-mini.png') }}" alt="" class="desktop_logo">
                <img src="{{ URL::asset('build/img/logo-retina-mini.png') }}" alt="" class="retina_logo">
            </span>
        </a>
        <a href="javascript:void(0);" class="fn__closer fn__icon_button desktop_closer">
            <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
        </a>
        <a href="javascript:void(0);" class="fn__closer fn__icon_button mobile_closer">
            <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
        </a>
    </div>
    <!-- !logo (left panel) -->

    <!-- content (left panel) -->
    <div class="leftpanel_content">

        <!-- #1 navigation group -->
        <div class="nav_group">
            <h2 class="group__title">Start Here</h2>
            <ul class="group__list">
                <li>
                    <a href="{{ url('/pin') }}" class="fn__tooltip active menu__item" data-position="right"
                        title="Home">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/home.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Pin (Implemented)</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/community-feed') }}" class="fn__tooltip menu__item" data-position="right"
                        title="Community Feed">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/community.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Community Feed</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/personal-feed') }}" class="fn__tooltip menu__item" data-position="right"
                        title="Personal Feed">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/person.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Personal Feed<span class="count">48</span></span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/models') }}" class="fn__tooltip menu__item" data-position="right"
                        title="Finetuned Models">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/cube.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Finetuned Models</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- !#1 navigation group -->

        <!-- #2 navigation group -->
        <div class="nav_group">
            <h2 class="group__title">User Tools</h2>
            <ul class="group__list">
                <li>
                    <a href="{{ url('/image-generation') }}" class="fn__tooltip menu__item" data-position="right"
                        title="Image Generation">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/image.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Image Generation</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/ai-chat-bot') }}" class="fn__tooltip menu__item" data-position="right"
                        title="AI Chat Bot">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/chat.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">AI Chat Bot</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- !#2 navigation group -->

        <!-- #3 navigation group -->
        <div class="nav_group">
            <h2 class="group__title">Support</h2>
            <ul class="group__list">
                <li>
                    <a href="{{ url('/pricing') }}" class="fn__tooltip menu__item" data-position="right"
                        title="Pricing">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/dollar.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Pricing</span>
                    </a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/video-generation') }}" class="fn__tooltip menu__item" title="FAQ &amp; Help"
                        data-position="right">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/question.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">FAQ &amp; Help</span>
                        <span class="trigger">
                            <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
                        </span>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ url('/documentation') }}" class="menu__item"><span class="text">Documentation</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/faq') }}" class="menu__item"><span class="text">FAQ</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/changelog') }}" class="menu__item">
                                <span class="text">Changelog<span class="fn__sup">(4.1.2)</span></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}" class="menu__item"><span class="text">Contact Us</span></a>
                        </li>
                        <li>
                            <a href="{{ url('/index-2') }}" class="menu__item"><span class="text">Home #2</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="fn__tooltip menu__item" data-position="right" title="Log Out">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/logout.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- !#3 navigation group -->
    </div>
    <!-- !content (left panel) -->
</div>

