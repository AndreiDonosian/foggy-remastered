<x-layouts.auth wraper_class="fn__has_sidebar">
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Dashboard">
    </x-slot>

    <!-- Image Generation Page -->
    <div class="techwave_fn_image_generation_page">
        <div class="generation__page">

            <!-- Generation Header -->
            <div class="generation_header">
                <div class="header_top">
                    <h1 class="title">Image Generation</h1>
                    <div class="setup">
                        <p class="info">This wil use <span class="count">4</span> tokens</p>
                        <a href="javascript:void(0);" class="sidebar__trigger">
                            <img src="{{ URL::asset('build/svg/option.svg') }}" alt="" class="fn__svg">
                        </a>
                    </div>
                </div>
                <div class="header_bottom">
                    <div class="include_area">
                        <textarea id="fn__include_textarea" rows="1"></textarea>
                        <textarea class="fn__hidden_textarea" rows="1" tabindex="-1"></textarea>
                    </div>
                    <div class="exclude_area">
                        <textarea id="fn__exclude_textarea" rows="1"></textarea>
                        <textarea class="fn__hidden_textarea" rows="1" tabindex="-1"></textarea>
                    </div>
                    <div class="generate_section">
                        <label class="fn__toggle">
                            <span class="t_in">
                                <input type="checkbox" checked id="negative_prompt">
                                <span class="t_slider"></span>
                                <span class="t_content"></span>
                            </span>
                            Negative Prompt
                        </label>
                        <a id="generate_it" href="javascript:void(0);" class="techwave_fn_button"><span>Generate</span></a>
                    </div>
                </div>
            </div>
            <!-- !Generation Header -->

            <div class="generation_history">

                <div class="fn__generation_item">
                    <div class="item_header">
                        <div class="title_holder">
                            <h2 class="prompt_title">Frozen Glacial Mystical spiral Lighthouse, a minimalist lighthouse
                                landscape with a mystical , Watercolor Clipart, comic, strybk, full Illustration, 4k,
                                sharp focus, watercolor, smooth soft skin, symmetrical, soft lighting, detailed face,
                                concept art, muted colors</h2>
                            <p class="negative_prompt_title">Negative prompt: Text, watermarks, off centre, blur, low
                                res, out of frame, cut off, ugly</p>
                        </div>
                        <div class="item_options">
                            <div class="fn__icon_options medium_size align_right">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <img src="{{ URL::asset('build/svg/info.svg') }}" alt="" class="fn__svg">
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <span class="text">ArtShaper v3</span>
                                        </li>
                                        <li>
                                            <span class="text">512 x 512px</span>
                                        </li>
                                        <li>
                                            <span class="text">March 15, 2023</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fn__icon_options medium_size align_right">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <span class="dots"></span>
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Copy Prompt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Reuse Prompt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Upscale All</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Download All</a>
                                        </li>
                                        <li class="high_priorety">
                                            <a href="javascript:void(0);">Delete All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_list">
                        <ul class="fn__generation_list">
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/1.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/2.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/3.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/4.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="fn__generation_item">
                    <div class="item_header">
                        <div class="title_holder">
                            <h2 class="prompt_title">Frozen Glacial Mystical spiral Lighthouse, a minimalist lighthouse
                                landscape with a mystical , Watercolor Clipart, comic, strybk, full Illustration, 4k,
                                sharp focus, watercolor, smooth soft skin, symmetrical, soft lighting, detailed face,
                                concept art, muted colors</h2>
                            <p class="negative_prompt_title">Negative prompt: Text, watermarks, off centre, blur, low
                                res, out of frame, cut off, ugly</p>
                        </div>
                        <div class="item_options">
                            <div class="fn__icon_options medium_size align_right">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <img src="{{ URL::asset('build/svg/info.svg') }}" alt="" class="fn__svg">
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <span class="text">ArtShaper v3</span>
                                        </li>
                                        <li>
                                            <span class="text">512 x 512px</span>
                                        </li>
                                        <li>
                                            <span class="text">March 15, 2023</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fn__icon_options medium_size align_right">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <span class="dots"></span>
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Copy Prompt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Reuse Prompt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Upscale All</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Download All</a>
                                        </li>
                                        <li class="high_priorety">
                                            <a href="javascript:void(0);">Delete All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_list">
                        <ul class="fn__generation_list">
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/5.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/6.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/7.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/8.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="fn__generation_item">
                    <div class="item_header">
                        <div class="title_holder">
                            <h2 class="prompt_title">Frozen Glacial Mystical spiral Lighthouse, a minimalist lighthouse
                                landscape with a mystical , Watercolor Clipart, comic, strybk, full Illustration, 4k,
                                sharp focus, watercolor, smooth soft skin, symmetrical, soft lighting, detailed face,
                                concept art, muted colors</h2>
                            <p class="negative_prompt_title">Negative prompt: Text, watermarks, off centre, blur, low
                                res, out of frame, cut off, ugly</p>
                        </div>
                        <div class="item_options">
                            <div class="fn__icon_options medium_size align_right">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <img src="{{ URL::asset('build/svg/info.svg') }}" alt="" class="fn__svg">
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <span class="text">ArtShaper v3</span>
                                        </li>
                                        <li>
                                            <span class="text">512 x 512px</span>
                                        </li>
                                        <li>
                                            <span class="text">March 15, 2023</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="fn__icon_options medium_size align_right">
                                <a href="javascript:void(0);" class="fn__icon_button">
                                    <span class="dots"></span>
                                </a>
                                <div class="fn__icon_popup">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);">Copy Prompt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Reuse Prompt</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Upscale All</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Download All</a>
                                        </li>
                                        <li class="high_priorety">
                                            <a href="javascript:void(0);">Delete All</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item_list">
                        <ul class="fn__generation_list">
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/1.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/2.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/3.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="fn__gl_item">
                                <div class="fn__gl__item">
                                    <div class="abs_item">
                                        <img src="{{ URL::asset('build/img/gallery/4.jpg') }}" alt="">
                                        <div class="all_options">
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Original Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscaled Image</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscaled Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <img src="{{ URL::asset('build/svg/upscale.svg') }}" alt="" class="fn__svg">
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Creative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">Alternative Upscale</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">HD Upscale</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="fn__icon_options medium_size">
                                                <a href="javascript:void(0);" class="fn__icon_button">
                                                    <span class="dots"></span>
                                                </a>
                                                <div class="fn__icon_popup">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0);">Make Variations</a>
                                                        </li>
                                                        <li class="high_priorety">
                                                            <a href="javascript:void(0);">Delete Image</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="generation_more">
                    <a href="{{ url('/pricing') }}" class="techwave_fn_button medium"><span>Previous Generations</span></a>
                </div>

            </div>

        </div>

        <div class="generation__sidebar">
            <div class="sidebar_model">
                <div class="fn__select_model">
                    <a class="model_open">
                        <img class="user_img" src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                        <div class="author">
                            <h4 class="subtitle">Model</h4>
                            <h3 class="title">ArtShaper v3</h3>
                        </div>
                        <span class="fn__icon_button">
                            <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
                        </span>
                    </a>
                    <div class="all_models">
                        <ul>
                            <li><a class="selected" href="javascript:void(0);">ArtShaper v3</a></li>
                            <li><a href="javascript:void(0);">ArtShaper v2</a></li>
                            <li><a href="javascript:void(0);">GameVisuals</a></li>
                            <li><a href="javascript:void(0);">VintageCar</a></li>
                            <li><a href="javascript:void(0);">ArtDeco</a></li>
                            <li><a href="javascript:void(0);">IceCold</a></li>
                            <li><a href="javascript:void(0);">Water Effect</a></li>
                            <li><a href="javascript:void(0);">Stable Diffusion v2</a></li>
                            <li><a href="javascript:void(0);">Stable Diffusion v1</a></li>
                            <li><a href="javascript:void(0);">Other</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sidebar_details">
                <div class="number_of_images">
                    <h4 class="title">Number of Images</h4>
                    <div class="fn__quantity">
                        <a href="javascript:void(0);" class="decrease"></a>
                        <input type="number" value="4" max="20" min="1">
                        <a href="javascript:void(0);" class="increase"></a>
                    </div>
                </div>
                <div class="img_sizes">
                    <h4 class="title">Image Dimensions</h4>
                    <div class="img_size_select">
                        <select>
                            <option value="512_512" selected>512 x 512px</option>
                            <option value="768_768">768 x 768px</option>
                            <option value="512_1024">512 x 1024px</option>
                            <option value="768_1024">768 x 1024px</option>
                            <option value="1024_1024">1024 x 1024px</option>
                        </select>
                    </div>
                </div>
                <div class="guidance_scale">
                    <h4 class="title">Image Dimensions<span class="fn__tooltip"
                            title="Select the resoultion of the images."><img src="{{ URL::asset('build/svg/question.svg') }}" alt=""
                                class="fn__svg"></span></h4>
                    <div class="fn__range">
                        <div class="range_in">
                            <input type="range" min="1" max="40" value="7">
                            <div class="slider"></div>
                        </div>
                        <div class="value">7</div>
                    </div>
                </div>
                <div class="prompt_magic_switcher">
                    <h4 class="title"><label for="prompt_switcher">Prompt Magic</label><span class="fn__tooltip"
                            title="TechWave Prompt v3.0. Our custom render pipeline which has much faster compliance and can improve the result with any model selected. Applies a 2x multiplier to accepted costs due to higher GPU overhead."><img
                                src="{{ URL::asset('build/svg/question.svg') }}" alt="" class="fn__svg"></span></h4>
                    <label class="fn__toggle">
                        <span class="t_in">
                            <input type="checkbox" checked id="prompt_switcher">
                            <span class="t_slider"></span>
                            <span class="t_content"></span>
                        </span>
                    </label>
                </div>
                <div class="contrast_switcher">
                    <h4 class="title"><label for="contrast_switcher">High Contrast</label><span class="fn__tooltip"
                            title="If your photo consists of extremely bright and dark areas, then it's considered high contrast. When it has a wide range of tones that go from pure white to pure black, it's medium contrast. No pure whites or blacks and a range of middle tones means it's low contrast."><img
                                src="{{ URL::asset('build/svg/question.svg') }}" alt="" class="fn__svg"></span></h4>
                    <label class="fn__toggle">
                        <span class="t_in">
                            <input type="checkbox" id="contrast_switcher">
                            <span class="t_slider"></span>
                            <span class="t_content"></span>
                        </span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- !Image Generation Page -->
</x-layouts.auth>
