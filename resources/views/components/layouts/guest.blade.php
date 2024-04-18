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
    {{ $slot }}
    <x-scripts scripts="{{ $scripts ?? '' }}" />
</body>

</html>
