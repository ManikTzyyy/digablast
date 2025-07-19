@extends('layouts.appDashboard')

@section('title', 'Contact')



@section('headerTitle')
@include('components.headerTitle', [
    'title' => 'Contacts List',
    'badge' => '50/100',
    'addText' => 'Add Contact',
     'buttonId' => 'show-add-button'

    ])
@endsection
@section('content')
    <div class="bg-black2 p-5">
        <form action="" class="flex items-center gap-2 pb-5 w-full sm:w-fit relative">
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
                <td class="px-2 py-3">Customer 1</td>
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
    <div id="dialog-add" class="w-full h-full bg-stone-950/50 fixed top-0 left-0 z-30 dialog-box flex-col justify-center items-center">
        <div class="h-2  w-[90%]  sm:w-1/2 bg-sky-500 rounded-t-sm dialog-content"></div>

        <div class="flex flex-col items-start text-black2 bg-white py-2 px-5 w-[90%]  sm:w-1/2 relative rounded-b-sm dialog-content">
            <div class="flex justify-between font-bold w-full items-center">
                <h2 class="text-lg">Add Contact</h2>
            <button class="close-dialog-button"><i class="fas fa-xmark"></i></button></div>
      
            <form action="" class="w-full pt-3">
                <label for="name" class="block ">Name</label>
                <input type="text" name="name" class="px-0.5 py-0.5 border border-gray-400 rounded-sm w-full" placeholder="ex. marketing bot">

                <label for="desc" class="block pt-2">Phone</label>
                <input type="number" name="desc" class="px-0.5 py-0.5 border border-gray-400 rounded-sm w-full" placeholder="ex. 6212345678901">

                <label for="description" class="block pt-2">Description</label>
                <textarea name="description" id=""  rows="5" class="px-0.5 py-0.5 border border-gray-400 rounded-sm w-full" placeholder="description text"></textarea>
                
                <button class="button button-success ">Submit</button>
                <button type="button" class="button button-warning close-dialog-button">Cancel</button>
            </form>
        </div>
    </div>
@endsection