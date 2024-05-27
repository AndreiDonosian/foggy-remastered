<x-layouts.auth>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Dashboard">
    </x-slot>

    <!-- Home Page -->
    <div class="techwave_fn_home">
        <div class="section_home">
            <div class="section_left">

                <!-- Title Shortcode -->
                <div class="techwave_fn_title_holder">
                    <h1 class="title">{{__('welcome.welcome')}}</h1>
                </div>
                <!-- !Title Shortcode -->

                <!-- Interactive List Shortcode -->
                <div class="techwave_fn_interactive_list">
                    <ul>
                        <li>
                            <div class="item">
                                <a href="{{ url('/pin') }}">
                                    <span class="icon">
                                        <img src="{{ URL::asset('build/svg/image.svg') }}" alt="" class="fn__svg">
                                    </span>
                                    <h2 class="title">{{__('welcome.pin_creation_title')}}</h2>
                                    <p class="desc">{{__('welcome.pin_creation_descr')}}</p>
                                    <span class="arrow"><img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg"></span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- !Interactive List Shortcode -->

            </div>
            <div class="section_right">
                <div class="company_info">
                    <img src="{{ URL::asset('build/img/logo_avks.svg') }}" alt="">
                    <p class="fn__animated_text">The official server of your storage. You give - we protect.</p>
                    <hr>
                    <div class="fn__members">
                        <div class="active item">
                            <span class="circle"></span>
                            <span class="text">1,154,694 Online</span>
                        </div>
                        <div class="item">
                            <span class="circle"></span>
                            <span class="text">77,345,912 Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- !Home Page -->

</x-layouts.auth>
