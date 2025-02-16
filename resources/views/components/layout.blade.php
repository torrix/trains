<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <script src="//unpkg.com/htmx.org"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
<x-nav />
{{ $slot }}
<div class="uk-container">
    <footer class="uk-section uk-section-muted uk-section-xsmall uk-text-small uk-padding-small">
        {{ config('app.name') }} powered by Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</div>
</body>
</html>
