@props([
    'link' => false,
    'heading' => '',
    'href' => '',
    'src' => '',
    'alt' => '',
    'order' => '',
])

<div class="flex flex-col lg:flex-row justify-center items-center gap-24">

    <div
        class="lg:w-1/2 flex flex-col justify-center lg:justify-start items-center lg:items-start gap-10 {{ $order }}">
        <x-base.heading class="font-semibold">{{ $heading }}</x-base.heading>
        <x-base.description> {{ $slot }}</x-base.description>
        @if ($link)
            <a href="{{ $href }}" class="uppercase font-semibold text-sm link-hover">Dowiedz się więcej</a>
        @endif
    </div>
    <div class="lg:w-1/2 o">
        <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy"
            class="h-[400px] w-full object-cover md:opacity-0 image-animation-top">
    </div>
</div>
