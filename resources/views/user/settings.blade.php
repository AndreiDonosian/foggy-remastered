<x-layouts.auth>
    <x-slot name="title">User Settings</x-slot>
    <x-slot name="meta">
        <meta name="description" content="User Settings">
    </x-slot>

    <!-- User Settings Page -->
    <div class="techwave_fn_user_settings_page">
        <!-- Page Title -->
        <div class="techwave_fn_pagetitle">
            <h2 class="title">Settings</h2>
        </div>
        <!-- !Page Title -->

        <div class="container small">
            <div class="techwave_fn_user_settings">
                <form>
                    <div class="user__settings">
                        <div class="settings_left">

                            <!-- Upload Shortcode -->
                            <label class="fn__upload">
                                <span class="upload_content">
                                    <img src="{{ URL::asset('build/svg/upload.svg') }}" alt="" class="fn__svg">
                                    <span class="title">Drag & Drop a Image</span>
                                    <span class="fn__lined_text">
                                        <span class="line"></span>
                                        <span class="text">Or</span>
                                        <span class="line"></span>
                                    </span>
                                    <span class="title">Browse</span>
                                    <span class="desc">Supports JPG, JPEG, and PNG</span>
                                </span>
                                <span class="upload_preview">
                                    <a href="javascript:void(0);" class="fn__closer fn__icon_button">
                                        <img src="{{ URL::asset('build/svg/close.svg') }}" alt="" class="fn__svg">
                                    </a>
                                    <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar??URL::asset('build/img/user/user.jpg')}}" alt="" class="preview_img">
                                </span>

                                <input type="file" accept="image/*">
                            </label>
                            <!-- !Upload Shortcode -->

                        </div>

                        <div class="settings_right">
                            <div class="item">
                                <label class="input_label" for="name">Name</label>
                                <div class="input_item">
                                    <input class="input" type="text" id="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
                                </div>
                            </div>
                            <div class="item">
                                <label class="input_label" for="username">Crypt passcode (changing will remove all your files!)</label>
                                <div class="input_item">
                                    <input class="input" type="text" id="crypt-passcode" value="0000">
                                </div>
                            </div>
                            <div class="item">
                                <label class="input_label" for="email">Email Address</label>
                                <div class="input_item">
                                    <input class="input" type="text" id="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
                                </div>
                            </div>
                            <div class="item">
                                <label class="input_label" for="password">Password</label>
                                <div class="input_item">
                                    <input class="input" type="password" id="password" value="lqbjSA34a!bh1">
                                </div>
                            </div>
                            <div class="item">
                                <label class="fn__checkbox">
                                    <input type="checkbox">I approve all changes
                                    <span class="checkmark"></span>
                                    <img src="{{ URL::asset('build/svg/check.svg') }}" alt="" class="fn__svg">
                                </label>
                            </div>
                            <div class="item">
                                <label class="fn__submit">
                                    <input type="submit" value="Save Changes">
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- !User Settings Page -->
</x-layouts.auth>