<div class="flex flex-col lg:flex-row justify-center items-center gap-12">

    <div class="lg:w-1/2 flex flex-col justify-center lg:justify-start items-center lg:items-start gap-10 {{$order}}">
        <x-base.heading class="font-semibold">{{ $heading }}</x-base.heading>
        <x-base.description > {{ $slot }}</x-base.description>
        <a href="{{ $href }}" class="uppercase font-semibold text-sm link-hover">Dowiedz się więcej</a>

    </div>
    <div class="lg:w-1/2 ">
        <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy" class="max-h-[500px]">
    </div>
</div>
