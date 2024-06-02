<div class="techwave_fn_leftpanel">

    <div class="mobile_extra_closer"></div>

    <!-- logo (left panel) -->
    <div class="leftpanel_logo">
            <span class="full_logo">
                <img width="200px" src="{{ URL::asset('build/img/logo_avks.svg') }}" alt="" class="retina_logo">
                <img width="200px" src="{{ URL::asset('build/img/logo_avks.svg') }}" alt="" class="desktop_logo">
            </span>
            <span class="short_logo" style="background: url('{{ URL::asset('build/img/logo_avks.svg') }}');
            background-position: left;
            background-size: cover;width:60px;height:45px;
            background-repeat: no-repeat;">
{{--                <img src="{{ URL::asset('build/img/logo-desktop-mini.png') }}" alt="" class="desktop_logo">--}}
{{--                <img src="{{ URL::asset('build/img/logo-retina-mini.png') }}" alt="" class="retina_logo">--}}
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
                    <a href="{{ route('pin') }}" class="fn__tooltip active menu__item" data-position="right"
                        title="Home">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/home.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">File storage</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('public.index') }}" class="fn__tooltip active menu__item" data-position="right"
                       title="Process encrypted files">
                        <span class="icon">
                            <img src="{{ URL::asset('build/svg/cube.svg') }}" alt="" class="fn__svg">
                        </span>
                        <span class="text">Process encrypted files</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- !#1 navigation group -->

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

