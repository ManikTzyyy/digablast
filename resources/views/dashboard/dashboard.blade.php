@extends('layouts.appDashboard')

@section('title', 'Dashboard')

@section('headerTitle')
    @include('components.headerTitle', [
        'title' => 'Dashboard',
    ])
@endsection

@section('content')
    <div class="flex gap-2 flex-wrap sm:flex-nowrap">
        <div class="flex relative h-32 w-full ">
            <div class="bg-success w-1"></div>
            <div class="bg-black2 px-2 py-0.5 w-full relative flex flex-col justify-between h-full">
                <div>
                    <div class="text-stone-600">Devices List</div>
                    <div class="text-6xl pt-2">2</div>
                </div>
                <div class="flex justify-end"> <a href="/device" class="text-sm hover:underline text-slate-700">view more
                        <span><i class="fa-solid fa-angle-right text-xs"></i></span>
                    </a></div>
            </div>
        </div>

         <div class="flex relative h-32 w-full ">
            <div class="bg-warning w-1"></div>
            <div class="bg-black2 px-2 py-0.5 w-full relative flex flex-col justify-between h-full">
                <div>
                    <div class="text-stone-600">Contacts List</div>
                    <div class="text-6xl pt-2">15</div>
                </div>
                <div class="flex justify-end"> <a href="/contact" class="text-sm hover:underline text-slate-700">view more
                        <span><i class="fa-solid fa-angle-right text-xs"></i></span>
                    </a></div>
            </div>
        </div>
        <div class="flex relative h-32 w-full ">
            <div class="bg-error w-1"></div>
            <div class="bg-black2 px-2 py-0.5 w-full relative flex flex-col justify-between h-full">
                <div>
                    <div class="text-stone-600">Templates List</div>
                    <div class="text-6xl pt-2">4</div>
                </div>
                <div class="flex justify-end"> <a href="/template" class="text-sm hover:underline text-slate-700">view more
                        <span><i class="fa-solid fa-angle-right text-xs"></i></span>
                    </a></div>
            </div>
        </div>

    </div>
@endsection