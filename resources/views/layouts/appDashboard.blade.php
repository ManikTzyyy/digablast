<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Dashboard')</title>

    @vite('resources/css/app.css')
    @vite('resources/js/appDashboard.js')
    @vite('resources/js/formDialog.js')

    <style>
        body {
            background-color: var(--color-black)
        }
    </style>
</head>

<body>
    <div class="flex bg-black min-h-screen relative">
        {{-- sidebar --}}
        <div class="relative z-10 min-h-screen"> @include('components.sidebar')</div>
        <div class="empty-sidebar"></div>

        <div class="bg-black text-white w-full min-h-full  relative">
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