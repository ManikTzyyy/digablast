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
    <div class="flex min-h-screen bg-[#000000]">
        {{-- sidebar --}}
        @include('components.sidebar')

        <div class="bg-[#000000] text-white w-full">
            @include('components.header')
            @yield('content')
        </div>
    </div>
</body>

</html>