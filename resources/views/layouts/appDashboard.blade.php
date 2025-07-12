<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Dashboard')</title>

    @vite('resources/css/app.css')
    @vite('resources/js/appDashboard.js')
</head>

<body>
    <div class="flex min-h-screen bg-black">
        {{-- sidebar --}}
        <div class="relative z-10"> @include('components.sidebar')</div>

        <div class="bg-black text-white w-full relative">
            @include('components.header')
            @hasSection('headerTitle')
                @yield('headerTitle')
            @else
                @include('components.headerTitle', ['title' => 'Default Title'])
            @endif

            <div class="w-full p-5">@yield('content')</div>
        </div>
    </div>
</body>

</html>