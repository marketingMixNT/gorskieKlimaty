<div
class="flex flex-col  gap-6   group shadow-lg hover:shadow-2xl duration-300 border  md:opacity-0 opacity-animation md:mx-12 lg:m-0">

{{-- IMG --}}
<div class=" max-h-[400px] overflow-hidden">
    <img src="{{ $img }}" alt="wnętrze apartamentu {{ $title }}"
        class="w-full h-full object-cover duration-300 group-hover:scale-110">
</div>
{{-- TEXT --}}
<div class="flex flex-col justify-evenly items-start p-8 pb-12 2xl:pb-8   gap-10 ">
    {{-- TITLE --}}
    <span class="text-3xl font-semibold  ">
        Apartament {{ $title }}
    </span>
    {{-- ICONS --}}
    <div class="flex flex-wrap gap-8 xl:gap-12">

        <div class="flex justify-center items-center gap-4">
            <img src="/assets/icons/persons.svg" alt="" class="w-8" /><span class="text-sm whitespace-nowrap">max {{ $persons }}
                os.</span>
        </div>
        <div class="flex justify-center items-center gap-4 p">
            <img src="/assets/icons/size.svg" alt="" class="w-5" /><span class="text-sm whitespace-nowrap">{{ $size }} m²</span>
        </div>
        <div class="flex justify-center items-center gap-4">
            <img src="/assets/icons/mountain.svg" alt="" class="w-8" /><span class="text-sm whitespace-nowrap">Widok na góry</span>
        </div>

    </div>
    {{-- DESCRIPTION --}}
    <a href="{{route($link)}}" class="link-hover font-semibold">Sprawdź</a>

    </d>

</div>
</div>