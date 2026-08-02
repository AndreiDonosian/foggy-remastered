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

            @if (session('status'))
                <div class="alert alert-success" style="margin-bottom:20px;color:#0f5132;background:#d1e7dd;border:1px solid #badbcc;border-radius:5px;padding:12px 16px;">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger" style="margin-bottom:20px;color:#842029;background:#f8d7da;border:1px solid #f5c2c7;border-radius:5px;padding:12px 16px;">
                    <ul style="margin:0;padding-left:18px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="techwave_fn_user_settings">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="user__settings">
                        <div class="settings_left">

                            <!-- Upload Shortcode -->
                            <label class="fn__upload{{ \Illuminate\Support\Facades\Auth::user()->avatar ? ' has_img' : '' }}">
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

                                <input type="file" name="avatar" accept="image/*">
                            </label>
                            <!-- !Upload Shortcode -->

                        </div>

                        <div class="settings_right">
                            <div class="item">
                                <label class="input_label" for="name">Name</label>
                                <div class="input_item">
                                    <input class="input" type="text" id="name" name="name" value="{{ old('name', \Illuminate\Support\Facades\Auth::user()->name) }}">
                                </div>
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

            <!-- Change Email -->
            <div class="techwave_fn_user_settings" style="margin-top:30px;">
                <form action="{{ route('profile.email.update') }}" method="POST">
                    @csrf
                    <div class="user__settings">
                        <div class="settings_right" style="width:100%;">
                            <div class="item">
                                <label class="input_label" for="email">Email Address</label>
                                <div class="input_item">
                                    <input class="input" type="email" id="email" name="email" value="{{ old('email', \Illuminate\Support\Facades\Auth::user()->email) }}">
                                </div>
                                <p class="desc" style="margin-top:8px;opacity:.7;">
                                    Changing your email requires activation. A confirmation link will be sent to the new
                                    address, and the change only takes effect once you open it. You can change your email once a month.
                                </p>
                            </div>
                            <div class="item">
                                <label class="fn__submit">
                                    <input type="submit" value="Send Activation Link">
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- !Change Email -->

            <!-- Change Password -->
            <div class="techwave_fn_user_settings" style="margin-top:30px;">
                <form action="{{ route('profile.password.reset') }}" method="POST">
                    @csrf
                    <div class="user__settings">
                        <div class="settings_right" style="width:100%;">
                            <div class="item">
                                <label class="input_label">Password</label>
                                <p class="desc" style="opacity:.7;">
                                    For your security, passwords can only be changed through a recovery link.
                                    Click the button below and we will email a password reset link to your address.
                                </p>
                            </div>
                            <div class="item">
                                <label class="fn__submit">
                                    <input type="submit" value="Send Password Reset Link">
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- !Change Password -->

        </div>

    </div>
    <!-- !User Settings Page -->
</x-layouts.auth>
