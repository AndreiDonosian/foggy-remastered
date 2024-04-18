<!DOCTYPE html>
<html lang="en">

<head>
    <x-meta :title="$title ?? 'Home'" :meta="$meta ?? ''" />
    <x-styles styles="{{ $styles ?? '' }}" />
    <script>
        
        if (!localStorage.frenify_skin) {
            localStorage.frenify_skin = 'dark';
        }
        if (!localStorage.frenify_panel) {
            localStorage.frenify_panel = '';
        }

        document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
        if (localStorage.frenify_panel !== '') {
            document.documentElement.classList.add(localStorage.frenify_panel);
        }
    </script>
</head>

<body>

    <!-- Moving Submenu -->
    <div class="techwave_fn_fixedsub">
        <ul></ul>
    </div>
    <!-- !Moving Submenu -->

    <!-- Preloader -->
    <x-preloader />
    <!-- !Preloader -->

    {{ $other ?? '' }}

    <!-- MAIN WRAPPER -->
    <div class="techwave_fn_wrapper {{ $attributes['wraper_class'] ?? '' }}">
        <div class="techwave_fn_wrap">
            <!-- Searchbar -->
            <x-searchbar />
            <!-- !Searchbar -->

            <!-- header -->
            <x-header />
            <!-- !header -->

            <!-- sidebar -->
            <x-sidebar />
            <!-- !sidebar -->

            <!-- content -->
            <div class="techwave_fn_content">
                <div class="techwave_fn_page">
                    {{ $slot }}
                </div>

                <!-- footer -->
                <x-footer />
                <!-- !footer -->
            </div>
            <!-- !content -->

        </div>
    </div>
    <!-- !MAIN WRAPPER -->

    <x-scripts scripts="{{ $scripts ?? '' }}" />
</body>

</html>
