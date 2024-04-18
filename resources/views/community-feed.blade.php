<x-layouts.auth>
    <x-slot name="title">Community Feed</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Community Feed">
    </x-slot>

    <x-slot name="other">
        <!-- Report -->
        <x-report />
        <!-- !Report -->

        <!-- Image Lightbox -->
        <x-lightbox />
        <!-- !Image Lightbox -->
    </x-slot>

    <!-- Community Feed Page -->
    <div class="techwave_fn_community_page">

        <div class="fn__title_holder">
            <div class="container">
                <h1 class="title">Community Feed</h1>
            </div>
        </div>

        <!-- Feed -->
        <div class="techwave_fn_feed">
            <div class="container">

                <!-- feed filter -->
                <div class="feed__filter">
                    <div class="filter__left">
                        <div class="filter__search">
                            <input type="text" placeholder="Search gallery">
                            <a href="javascript:void(0);" class="techwave_fn_button"><span>Search</span></a>
                        </div>
                        <div class="filter__upscaled">
                            <label class="fn__checkbox">
                                <input type="checkbox">Upscaled
                                <span class="checkmark"></span>
                                <img src="{{ URL::asset('build/svg/check.svg') }}" alt="" class="fn__svg">
                            </label>
                        </div>
                    </div>
                    <div class="filter__sorting">
                        <a href="javascript:void(0);" class="filter__trending enabled techwave_fn_button has__icon small__border">
                            <img src="{{ URL::asset('build/svg/thunder.svg') }}" alt="" class="fn__svg">
                            <span>Trending</span>
                        </a>
                        <a href="javascript:void(0);" class="filter__new disabled techwave_fn_button has__icon small__border">
                            <img src="{{ URL::asset('build/svg/new.svg') }}" alt="" class="fn__svg">
                            <span>New</span>
                        </a>
                    </div>
                </div>
                <!-- !feed filter -->

                <!-- feed content -->
                <div class="feed__content">
                    <div class="feed__results">
                        <div class="fn__preloader">
                            <div class="icon"></div>
                            <div class="text">Loading</div>
                        </div>
                        <ul class="fn__gallery_items">

                            <!-- #1 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="345">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/1.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="3">
                                                <span class="count">343</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt="" class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#1 gallery item -->

                            <!-- #2 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="265">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/2.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="265">
                                                <span class="count">65</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt="" class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#2 gallery item -->

                            <!-- #3 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="456">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/3.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="456">
                                                <span class="count">95</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt=""
                                                    class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#3 gallery item -->

                            <!-- #4 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="4311">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/4.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="4311">
                                                <span class="count">120</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt=""
                                                    class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#4 gallery item -->

                            <!-- #5 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="33">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/5.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="33">
                                                <span class="count">322</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt=""
                                                    class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#5 gallery item -->

                            <!-- #6 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="709">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/6.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="709">
                                                <span class="count">234</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt=""
                                                    class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#6 gallery item -->

                            <!-- #7 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="20">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/7.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="20">
                                                <span class="count">700</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt=""
                                                    class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#7 gallery item -->

                            <!-- #8 gallery item -->
                            <li class="fn__gallery_item">
                                <div class="item" data-id="45">
                                    <div class="img">
                                        <img src="{{ URL::asset('build/img/gallery/8.jpg') }}" alt="">
                                    </div>

                                    <div class="item__info">
                                        <div class="info__header">
                                            <div class="user__info">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">LuckyLee</h3>
                                            </div>
                                            <a href="javascript:void(0);" class="fn__like no_border" data-id="45">
                                                <span class="count">90</span>
                                                <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                                                <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt=""
                                                    class="fn__svg full__like">
                                            </a>
                                        </div>
                                        <p class="desc">Terra Fusion: A daring fusion of tectonic forms with
                                            neo-abstract swirls, reflecting the chaos and </p>
                                    </div>
                                </div>
                            </li>
                            <!-- !#8 gallery item -->
                        </ul>
                    </div>
                    <div class="feed__more">
                        <a href="javascript:void(0);" class="medium techwave_fn_button"><span>Load More</span></a>
                    </div>
                </div>
                <!-- !feed content -->
            </div>
        </div>
        <!-- !Feed -->
    </div>
    <!-- !Community Feed Page -->
</x-layouts.auth>
