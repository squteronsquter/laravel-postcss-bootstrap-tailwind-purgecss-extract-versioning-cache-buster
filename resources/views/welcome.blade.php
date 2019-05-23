<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel with Tailwind CSS</title>
{{-- <link rel="stylesheet" href="/css/app.css"> --}}
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="bg-primary-50 text-white">
        <div id="app" class="bg-primary-700 container mx-auto p-4">
            <example-component></example-component>
            <h1 class="text-6xl">Welcome to Laravel with Tailwind & Purge CSS</h1>
            <p class="italic text-3xl">Tailwind CSS is pretty awesome!</p>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">This text is responsvie. Check it out for various screens.</p>
        </div>
        <div class="container flex flex-col justify-center items-center w-auto h-64 text-secondary" role="status">
            <div class="spinner-border">
                <span class="sr-only">
                 Loading...
                </span>
            </div>

          </div>
        <div class="container flex flex-col justify-center items-center example w-auto">
            <h1 class="text-6xl">Example class in _customstyles</h1>
        </div>

        <script src="{{ mix('js/manifest.js') }}"></script>
        <script src="{{ mix('js/vendor.js') }}"></script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
