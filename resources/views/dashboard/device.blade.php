@extends('layouts.appDashboard')

@section('title', 'Device')




@section('headerTitle')
    @include('components.headerTitle', [
        'title' => 'Devices List',
        'badge' => '3/10',
        'addText' => 'Add Device'
    ])
@endsection

@section('content')
    <div class="bg-black2 p-5">
        <form action="" class="flex items-center gap-2 pb-5 w-full sm:w-auto relative">
            <input type="text" placeholder="Search item" class="w-full border rounded-sm border-stone-500 px-2 py-1">
            <button class="button button-success"><i class="fas fa-search"></i></button>
        </form><div class="w-full overflow-x-scroll no-scroball"><table class="w-full text-left"><tr class="bg-black text-stone-300 text-nowrap">
                <th class="px-2 py-3">#</th>
                <th class="px-2 py-3">Name</th>
                <th class="px-2 py-3">Phone</th>
                <th class="px-2 py-3">Description</th>
                <th class="px-2 py-3 text-center">Action</th>
            </tr>
            <tr class=" border-stone-600 border-b text-sm text-stone-400">
                <td class="px-2 py-3">1</td>
                <td class="px-2 py-3">Marketing Bot</td>
                <td class="px-2 py-3">+628217341</td>
                <td class="px-2 py-3 w-1/2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, obcaecati.</td>
                <td  class="flex justify-center items-center gap-1 text-white py-3">
                    <button class="button button-success px-2 py-3">
                        <i class="fas fa-pencil"></i>
                    </button><button class="button button-warning px-2 py-3">
                        <i class="fas fa-pencil"></i>
                    </button>
                    <button class="button button-error px-2 py-3">
                        <i class="fas fa-pencil"></i>
                    </button>
                </td>
            </tr>
        </table></div>
    </div>
@endsection