<div id="navbar" class="fixed top-0 z-50 w-full">
    <div class="flex justify-between text-white">
        <a href="/">
            <h1 class="text-2xl font-medium p-6">{{ env('APP_NAME') }}</h1>
        </a>
        <div class="hidden sm:flex items-center gap-6 sm:px-4">
            <a href="/#section-about">About</a>
            <a href="/#section-pricing">Pricing</a>
            <a href="/#footer">Contact</a>
            <div class="flex gap-2"><a href="/login" class="button button-success">Sign In</a>
                <a href="/register" class="button button-transparent">Sign Up</a>
            </div>
        </div>
        <button id="menu-bars" class=" p-6 relative z-10 text-3xl top-0 sm:hidden"><i
                class="fa-solid fa-bars icon-bar"></i></button>
        <div id="mobile-menu" class="sm:hidden flex absolute bg-white text-black w-full h-screen">
            <div class="flex flex-col items-start gap-6 absolute p-7">
                <div class="flex gap-5"><a href="/login" class="button button-success">Sign In</a>
                    <a href="/register" class="button button-transparent">Sign Up</a>
                </div>
                <a href="/#section-about">About</a>
                <a href="/#section-pricing">Pricing</a>
                <a href="/#footer">Contact</a>

            </div>
        </div>

    </div>
</div>