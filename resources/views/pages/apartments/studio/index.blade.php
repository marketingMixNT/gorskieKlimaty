<x-layouts.master>

    @section('title', 'Apartament Typu Studio – Intymność i Elegancja w Villa Górskie Klimaty')
    @section('description',
        'Zanurz się w luksusie naszego Apartamentu Typu Studio, idealnego dla par. Nowoczesny design, pełne wyposażenie i atmosfera intymności czekają w Zakopanym.')

        {{-- HEADER --}}
        <x-base.header title="Apartament typu Studio" bgi='studio-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper max-w-screen-xl">
                <div class="flex flex-col justify-center items-center gap-12">
                    <x-base.heading>Urok i Prywatność: Oaza Spokoju w Zakopanem</x-base.heading>
                    <x-base.section-description>Odkryj nasz Apartament Typu Studio, gdzie każdy detal został zaprojektowany z myślą o stworzeniu intymnej atmosfery dla naszych gości. Nowoczesny aneks kuchenny, elegancka łazienka i wygodne łóżko zapraszają do relaksu w stylowym otoczeniu. Idealne miejsce dla par pragnących spędzić romantyczne chwile, oddając się pięknu otaczających Zakopane krajobrazów.</x-base.section-description>

                    <hr class="hr mx-auto">

                </div>
                {{-- THUMBNAILS SLIDER --}}
                <div id="ApartmentMainImage">
                    <apartament-main-image :images='{{ json_encode($images) }}'></apartament-main-image>
                </div>




                {{-- CONTENT --}}
                <div class="flex flex-col justify-center items-center gap-12 lg:gap-16 max-w-screen-xl  mx-auto">

                    {{-- TITLE --}}
                    <div class="flex flex-col sm:flex-row justify-between gap-12 sm:0 w-full items-center pb-12 border-b">
                        <x-base.heading class="font-semibold">Apartament typu Studio</x-base.heading>
                        <x-base.button href="#">Sprawdź dostępność </x-base.button>
                    </div>

                    {{-- ICONS --}}
                    @include('pages.apartments._sections.features')

                    {{-- AMENITIES --}}
                    @include('pages.apartments._sections.amenities')
                </div>
            </div>
            <!--SLIDER-->
            <div id="ApartmentSlider" class=" mx-12 sm:mx-6 ">
                <apartament-slider :images='{{ json_encode($images) }}'></apartament-slider>

                <div class="flex flex-col justify-center items-center gap-12 my-12">
                    <x-base.button class="">Galeria</x-base.button>
                    <hr class="w-1/3 border border-black">
                    <div class="be-panel   bottom-24  px-4 bg-bgDark-400"></div>
                </div>
            </div>
            <!--OTHER ROOMS-->
            <div class="wrapper max-w-screen-xl">
                @include('pages.apartments._sections.other_rooms')



        </main>
    </x-layouts.master>
