<div class="flex justify-center items-center gap-12">

    <div class="w-1/2 flex flex-col justify-start items-start gap-10 {{$order}}">
        <x-base.heading>{{ $heading }}</x-base.heading>
        <x-base.description> {{ $slot }}</x-base.description>
        <a href="{{ $href }}" class="uppercase font-semibold text-sm">Dowiedz się więcej</a>

    </div>
    <div class="w-1/2 ">
        <img src="{{ $src }}" alt="{{ $alt }}" loading='lazy'>
    </div>
</div>
