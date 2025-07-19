<div class=" text-stone-500 p-3 h-full fixed bg-black2 shadow shadow-stone-900 collapse-menu " id="sidebar">
    <button id="button-sidebar"
        class="bg-white w-7 h-7 text-black rounded-full flex justify-center items-center absolute -right-3 top-5"><i
            class="fa-solid " id="button-icon"></i></button>
    <h1 id="title-sidebar" class="font-bold text-3xl  pb-3 text-white hidden-menu">DigaBlast</h1>
    <div class="my-5 border-stone-500 border-b"></div>

    <div class="relative group" id="menu-trigger">
        <a href="/dashboard"
            class="flex items-center py-2 hover:text-white {{ request()->is('dashboard') ? 'text-white bg-gray-800 rounded-2xl' : '' }} ">
            <div class="flex relative justify-center items-center text-xl w-10 h-auto">
                <i class="fa-solid fa-gauge "></i>
            </div>
            <p class="menu-text hidden-menu">Dashboard</p>
        </a>
        <span
            class="absolute top-1/2 -translate-y-1/2 left-12 bg-gray-800 text-white text-sm px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition whitespace-nowrap hidden group-hover:block">
            Dashboard
        </span>
    </div>


    <div class="relative group" id="menu-trigger">
        <a href="/device"
            class="flex items-center py-2 hover:text-white {{ request()->is('device') ? 'text-white bg-gray-800 rounded-2xl' : '' }}">
            <div class="flex relative justify-center items-center text-xl w-10 h-auto">
                <i class="fa-solid fa-robot "></i>
            </div>
            <p class="menu-text hidden-menu">Devices</p>
        </a>
        <span
            class="absolute top-1/2 -translate-y-1/2 left-12 bg-gray-800 text-white text-sm px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition whitespace-nowrap hidden group-hover:block">
            Devices
        </span>
    </div>

    <div class="relative group" id="menu-trigger">
        <a href="/contact"
            class="flex items-center py-2 hover:text-white {{ request()->is('contact') ? 'text-white bg-gray-800 rounded-2xl' : '' }}">
            <div class="flex relative justify-center items-center text-xl w-10 h-auto">
                <i class="fa-solid fa-address-book "></i>
            </div>
            <p class="menu-text hidden-menu">Contact</p>
        </a>
        <span
            class="absolute top-1/2 -translate-y-1/2 left-12 bg-gray-800 text-white text-sm px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition whitespace-nowrap hidden group-hover:block">
            Contact
        </span>
    </div>



    <div class="relative group" id="menu-trigger">
        <a href="/template"
            class="flex items-center py-2 hover:text-white {{ request()->is('template') ? 'text-white bg-gray-800 rounded-2xl' : '' }}">
            <div class="flex relative justify-center items-center text-xl w-10 h-auto">
                <i class="fa-solid fa-envelope-open-text "></i>
            </div>
            <p class="menu-text hidden-menu">Template</p>
        </a>
        <span
            class="absolute top-1/2 -translate-y-1/2 left-12 bg-gray-800 text-white text-sm px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition whitespace-nowrap hidden group-hover:block">
            Template
        </span>
    </div>



    <div class="relative group" id="menu-trigger">
        <a href="/blast"
            class="flex items-center py-2 hover:text-white {{ request()->is('blast') ? 'text-white bg-gray-800 rounded-2xl' : '' }}">
            <div class="flex relative justify-center items-center text-xl w-10 h-auto">
                <i class="fa-solid fa-explosion "></i>
            </div>
            <p class="menu-text hidden-menu">Blast</p>
        </a>
        <span
            class="absolute top-1/2 -translate-y-1/2 left-12 bg-gray-800 text-white text-sm px-2 py-1 rounded shadow-lg opacity-0 group-hover:opacity-100 transition whitespace-nowrap hidden group-hover:block">
            Blast
        </span>
    </div>


</div>