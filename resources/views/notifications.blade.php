<x-layouts.auth>
    <x-slot name="title">Notifications</x-slot>
    <x-slot name="meta">
        <meta name="description" content="Notifications">
    </x-slot>

    <x-slot name="other">
        <!-- Report -->
        <x-report />
        <!-- !Report -->

        <!-- Image Lightbox -->
        <x-lightbox />
        <!-- !Image Lightbox -->
    </x-slot>

    <!-- Notifications Page -->
    <div class="techwave_fn_notifications_page">

        <!-- Page Title -->
        <div class="techwave_fn_pagetitle">
            <h2 class="title">Notifications</h2>
        </div>
        <!-- !Page Title -->

        <div class="techwave_fn_notifications_content">
            <div class="container small">

                <!-- Notifications List -->
                <div class="techwave_fn_notifications_list">
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Version 4.1.2 has been released</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Video generation Beta has been released</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Terms has been updated</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Project Delivery Preparation</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Your generation has been chosen this month featured item</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Congratulations. You are upgraded to premium level</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Your account is verified now!</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                    <div class="notification__item">
                        <a href="{{ url('/notification-single') }}" class="fn__full_link"></a>
                        <h2 class="item__title">Welcome to TECH-AI</h2>
                        <span class="item__date">May 25, 2023</span>
                    </div>
                </div>
                <!-- !Notifications List -->

            </div>
        </div>
    </div>
    <!-- !Notifications Page -->
</x-layouts.auth>
