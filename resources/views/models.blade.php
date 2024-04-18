<x-layouts.auth>
    <x-slot name="title">Finetuned Models</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Finetuned Models">
    </x-slot>

    <x-slot name="other">
        <!-- Report -->
        <x-report />
        <!-- !Report -->

        <!-- Image Lightbox -->
        <x-lightbox />
        <!-- !Image Lightbox -->
    </x-slot>

    <!-- Models Page -->
    <div class="techwave_fn_models_page">

        <div class="fn__title_holder">
            <div class="container">
                <h1 class="title">Finetuned Models</h1>
            </div>
        </div>

        <!-- Models -->
        <div class="techwave_fn_models">

            <div class="fn__tabs">
                <div class="container">
                    <div class="tab_in">
                        <a class="active" href="#tab1">Main Models</a>
                        <a href="#tab2">Community’s</a>
                        <a href="#tab3">Bookmarks</a>
                        <a href="#tab4">My Own</a>
                    </div>
                </div>
            </div>


            <!-- models filter -->
            <div class="container">
                <div class="models__filter">
                    <div class="filter__left">
                        <div class="filter__search">
                            <input type="text" placeholder="Search gallery">
                            <a href="javascript:void(0);" class="techwave_fn_button"><span>Search</span></a>
                        </div>
                    </div>
                    <div class="filter__right">
                        <div class="filter__category">
                            <select>
                                <option value="all" selected>All Categories</option>
                                <option value="Buildings">Buildings</option>
                                <option value="Characters">Characters</option>
                                <option value="Environments">Environments</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Illustration">Illustration</option>
                                <option value="Graphical">Graphical</option>
                                <option value="Photography">Photography</option>
                                <option value="Textures">Textures</option>
                            </select>
                        </div>
                        <div class="filter__order">
                            <div class="fn__icon_options medium_size align_right">
                                <span class="fn__icon_button">
                                    <img src="{{ URL::asset('build/svg/filter.svg') }}" alt="" class="fn__svg">
                                </span>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Newest</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Oldest</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">A-Z</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- !models filter -->



            <div class="container">
                <!-- models content -->
                <div class="models__content">
                    <div class="models__results">
                        <div class="fn__preloader">
                            <div class="icon"></div>
                            <div class="text">Loading</div>
                        </div>
                        <div class="fn__tabs_content">
                            <div id="tab1" class="tab__item active">
                                <ul class="fn__model_items">

                                    <!-- #1 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/1.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#1 model item -->

                                    <!-- #2 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/2.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#2 model item -->

                                    <!-- #3 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/3.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#3 model item -->

                                    <!-- #4 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/4.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#4 model item -->

                                    <!-- #5 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/5.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#5 model item -->

                                    <!-- #6 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/6.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#6 model item -->

                                    <!-- #7 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/7.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#7 model item -->

                                    <!-- #8 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/8.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#8 model item -->

                                    <!-- #9 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/9.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#9 model item -->

                                    <!-- #10 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/10.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#10 model item -->

                                </ul>
                            </div>
                            <div id="tab2" class="tab__item">
                                <ul class="fn__model_items">

                                    <!-- #1 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/1.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#1 model item -->

                                    <!-- #2 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/2.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#2 model item -->

                                    <!-- #3 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/3.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#3 model item -->

                                    <!-- #4 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/4.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#4 model item -->

                                    <!-- #5 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/5.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#5 model item -->

                                    <!-- #6 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/6.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#6 model item -->

                                    <!-- #7 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/7.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#7 model item -->

                                    <!-- #8 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/8.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#8 model item -->

                                    <!-- #9 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/9.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#9 model item -->

                                    <!-- #10 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/10.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#10 model item -->

                                </ul>
                            </div>
                            <div id="tab3" class="tab__item">
                                <ul class="fn__model_items">

                                    <!-- #1 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/1.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#1 model item -->

                                    <!-- #2 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/2.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#2 model item -->

                                    <!-- #3 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/3.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#3 model item -->

                                    <!-- #4 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/4.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#4 model item -->

                                    <!-- #5 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/5.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#5 model item -->

                                    <!-- #6 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/6.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#6 model item -->

                                    <!-- #7 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/7.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#7 model item -->

                                    <!-- #8 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/8.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#8 model item -->

                                    <!-- #9 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/9.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#9 model item -->

                                    <!-- #10 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/10.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#10 model item -->

                                </ul>
                            </div>
                            <div id="tab4" class="tab__item">
                                <ul class="fn__model_items">

                                    <!-- #1 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark has__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/1.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#1 model item -->

                                    <!-- #2 model item -->
                                    <li class="fn__model_item">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__bookmark">
                                                <img src="{{ URL::asset('build/svg/bookmark.svg') }}" alt="" class="fn__svg hasntbook">
                                                <img src="{{ URL::asset('build/svg/bookmarked.svg') }}" alt="" class="fn__svg hasbook">
                                            </a>
                                            <div class="img">
                                                <img src="{{ URL::asset('build/img/models/2.jpg') }}" alt="">
                                            </div>
                                            <div class="item__info">
                                                <h3 class="title">GameVisuals</h3>
                                                <p class="desc">A versatile model great at both photorealism and
                                                    anime, includes noise offset training... by Lykon.</p>
                                            </div>
                                            <div class="item__author">
                                                <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                                                <h3 class="author_name">Caden</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- !#2 model item -->

                                    <li class="fn__model_item new">
                                        <div class="item">
                                            <a href="javascript:void(0);" class="fn__full_link"></a>
                                            <span class="add"></span>
                                            <span class="text">Add new</span>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="models__more">
                        <a href="javascript:void(0);" class="medium techwave_fn_button"><span>Load More</span></a>
                    </div>
                </div>
                <!-- !models content -->
            </div>
        </div>
        <!-- !Models -->
    </div>
    <!-- !Models Page -->
</x-layouts.auth>
