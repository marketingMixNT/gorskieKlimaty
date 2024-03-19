@props(['image'])


<button type="button"
    class="border-t border-r border-fontDark bg-secondary-400 first-of-type:bg-action-400 first-of-type:hover:bg-action-200 hover:bg-secondary-200 transition-colors duration-300 text-fontLight first-of-type:text-fontDark">
    <a {{ $attributes }} class="flex flex-col justify-center items-center py-2 gap-1">
        <img src="{{ $image }}" alt="" width="25px" class="w-6 xs:w-7">
        <span class="text-xs uppercase font-semibold ">{{ $slot }}</span></a>
</button>