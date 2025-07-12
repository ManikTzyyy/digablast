<div class="w-full bg-black2 flex justify-between items-center shadow-white py-3 px-5">
    <div class="flex gap-2">
        <h2 class="font-medium text-nowrap">{{ $title ?? 'Page Title' }}</h2>
        @if(isset($badge))
            <span class="bg-stone-400 text-stone-800 py-0 px-2 rounded-sm text-nowrap">{{ $badge }}</span>
        @endif
    </div>

    {{-- hanya tampilkan tombol jika $addText ada --}}
    @if(isset($addText))
        <button class="button button-primary text-nowrap sm:ml-0 ml-5">{{ $addText }}</button>
    @endif
</div>
