<div class="techwave_fn_img_lightbox">

    <!-- top section (of the image lightbox) -->
    <div class="lightbox__top">
        <div class="lightbox__tl">
            <div class="lightbox__tlbar">
                <div class="lightbox__tlbar_left">
                    <div class="item item__share fn__icon_options medium_size">
                        <a href="javascript:void(0);" class="item__btn fn__icon_button">
                            <img src="{{ URL::asset('build/svg/share.svg') }}" alt="" class="fn__svg">
                        </a>
                        <div class="fn__icon_popup">
                            <ul>
                                <li><a href="javascript:void(0);">Facebook</a></li>
                                <li><a href="javascript:void(0);">Twitter</a></li>
                                <li><a href="javascript:void(0);">Instagram</a></li>
                                <li><a href="javascript:void(0);">Linkedin</a></li>
                                <li><a href="javascript:void(0);">Pinterest</a></li>
                                <li><a href="javascript:void(0);" class="fn__copy" data-copied="Copied!">Copy Link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item item__download fn__icon_options medium_size">
                        <a href="javascript:void(0);" class="item__btn fn__icon_button">
                            <img src="{{ URL::asset('build/svg/download.svg') }}" alt="" class="fn__svg">
                        </a>
                        <div class="fn__icon_popup">
                            <ul>
                                <li><a href="javascript:void(0);">Original Image</a></li>
                                <li><a href="javascript:void(0);">Creative Upscaled Image</a></li>
                                <li><a href="javascript:void(0);">HD Upscaled Image</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="item item__more fn__icon_options medium_size">
                        <a href="javascript:void(0);" class="item__btn fn__icon_button">
                            <span class="dots"></span>
                        </a>
                        <div class="fn__icon_popup">
                            <ul>
                                <li><a href="javascript:void(0);">Remove Background</a></li>
                                <li><a href="javascript:void(0);">Creative Upscale</a></li>
                                <li><a href="javascript:void(0);">Alternative Upscale</a></li>
                                <li class="high_priorety"><a href="javascript:void(0);" class="fn__report">Report Image</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lightbox__tlbar_center">
                    <a href="javascript:void(0);" class="img_nav nav_prev">
                        <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
                    </a>
                    <a href="javascript:void(0);" class="img_nav nav_next">
                        <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
                    </a>
                </div>
                <div class="lightbox__tlbar_right">
                    <a href="javascript:void(0);" class="fn__like" data-id="2">
                        <span class="count">343</span>
                        <img src="{{ URL::asset('build/svg/like.svg') }}" alt="" class="fn__svg empty__like">
                        <img src="{{ URL::asset('build/svg/like-full.svg') }}" alt="" class="fn__svg full__like">
                    </a>
                </div>
            </div>
            <div class="lightbox__tlimg">
                <img src="{{ URL::asset('build/img/gallery/main.jpg') }}" alt="">
            </div>
        </div>
        <div class="lightbox__tr">
            <div class="user__profile">
                <a class="profile_link" href="{{ url('/user-profile') }}">
                    <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                    <h2 class="user_name">LuckyLee</h2>
                </a>
                <a class="fn__follow" href="javascript:void(0);" data-follow-text="Follow" data-unfollow-text="Unfollow">
                    <span class="text">Follow</span>
                </a>
                <a href="javascript:void(0);" class="fn__closer fn__icon_button">
                    <img src="{{ URL::asset('build/svg/close.svg') }}" alt="" class="fn__svg">
                </a>
            </div>
            <div class="item__details">
                <div class="fn__model">
                    <div class="model_img">
                        <img src="{{ URL::asset('build/img/user/user.jpg') }}" alt="">
                    </div>
                    <div class="model_info">
                        <h4 class="model_subtitle">Model</h4>
                        <h3 class="model_title">ArtShaper v3</h3>
                    </div>
                    <a href="{{ url('/image-generation') }}" class="fn__icon_button">
                        <img src="{{ URL::asset('build/svg/arrow.svg') }}" alt="" class="fn__svg">
                    </a>
                </div>

                <div class="fn__prompt_details">
                    <div class="prompt__header">
                        <div class="prompt__text">Prompt Details</div>
                        <div class="prompt__options">
                            <a href="javascript:void(0);" class="fn__icon_button">
                                <span class="dots"></span>
                            </a>
                            <div class="prompt__popup">
                                <ul>
                                    <li><a href="javascript:void(0);">Remix</a></li>
                                    <li><a href="javascript:void(0);">Image to Image</a></li>
                                    <li><a href="javascript:void(0);" class="fn__copy" data-copied="Copied!"
                                            data-text="Realistic painting, photorealistic masterpiece detailing, professional photography, natural lighting, volumetric lighting maximalist photoillustration: 8k resolution concept art intricately detailed, complex, elegant, expansive">Copy
                                            Prompt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="prompt__content">
                        <p>Realistic painting, photorealistic masterpiece detailing, professional photography,
                            natural lighting, volumetric lighting maximalist photoillustration: 8k resolution
                            concept art intricately detailed, complex, elegant, expansive</p>
                    </div>
                </div>

                <div class="techwave_fn_accordion small" data-type="accordion">
                    <!-- data-type values: accordion, toggle -->
                    <div class="acc__item">
                        <div class="acc__header">
                            <h2 class="acc__title">Negative Prompt</h2>
                            <div class="acc__icon"></div>
                        </div>
                        <div class="acc__content">
                            <p>TECH-AI is an AI-powered content production suite that empowers creators with a
                                powerful, customisable, and user-friendly platform for bringing their ideas to
                                life.</p>
                            <p>With a focus on granular control at every step of content creation, we put
                                creators at the centre of the creative process by offering granular control at
                                every stage of generation, ensuring that AI enhances, rather than replaces,
                                human creative potential.</p>
                            <p>Our custom back-end delivers advancements in model fine tuning, prompt adherence,
                                training and inference speed, and multi-image prompting functionality. We also
                                address common issues around image degradation and have implemented a custom
                                upscaling, with much more on the way!</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="fn__details_list">
                <ul>
                    <li>
                        <div class="sub_title">Created</div>
                        <div class="title">April 05, 2023</div>
                    </li>
                    <li>
                        <div class="sub_title">Resolution</div>
                        <div class="title">768 x 1024px</div>
                    </li>
                    <li>
                        <div class="sub_title">Sampler</div>
                        <div class="title">Tech-AI-Frenify</div>
                    </li>
                    <li>
                        <div class="sub_title">Step Count</div>
                        <div class="title">30</div>
                    </li>
                    <li>
                        <div class="sub_title">Base Model</div>
                        <div class="title">Frenify v2.0</div>
                    </li>
                    <li>
                        <div class="sub_title">High Contrast</div>
                        <div class="title">Off</div>
                    </li>
                    <li>
                        <div class="sub_title">Magic Prompt</div>
                        <div class="title">On</div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!-- !top section (of the image lightbox) -->

    <!-- related section (of the image lightbox) -->
    <div class="lightbox__related">

        <div class="fn__title_holder">
            <h2 class="title">Related Images</h2>
        </div>

        <div class="fn__grid_items">
            <ul>
                <li>
                    <a href="javascript:void(0);" data-id="1"><img src="{{ URL::asset('build/img/related/1.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="2"><img src="{{ URL::asset('build/img/related/2.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="3"><img src="{{ URL::asset('build/img/related/3.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="4"><img src="{{ URL::asset('build/img/related/4.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="5"><img src="{{ URL::asset('build/img/related/5.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="6"><img src="{{ URL::asset('build/img/related/6.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="7"><img src="{{ URL::asset('build/img/related/7.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="8"><img src="{{ URL::asset('build/img/related/8.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="9"><img src="{{ URL::asset('build/img/related/9.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="10"><img src="{{ URL::asset('build/img/related/10.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="11"><img src="{{ URL::asset('build/img/related/11.jpg') }}" alt=""></a>
                </li>
                <li>
                    <a href="javascript:void(0);" data-id="12"><img src="{{ URL::asset('build/img/related/12.jpg') }}" alt=""></a>
                </li>
            </ul>
        </div>

    </div>
    <!-- !related section (of the image lightbox) -->

</div>