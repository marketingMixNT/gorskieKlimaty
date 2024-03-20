<x-layouts.master>

    @section('title', 'Apartament Typu Standard w Villa Górskie Klimaty – Komfort i Styl')
    @section('description',
        'Odkryj idealne połączenie komfortu i funkcjonalności w naszym Apartamencie Typu Standard.
        Idealny wybór dla tych, którzy cenią sobie wygodę i piękno Zakopanego.')

        {{-- HEADER --}}
        <x-base.header title="Apartament typu Standard" bgi='standard-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper max-w-screen-xl">
                <div class="flex flex-col justify-center items-center gap-12">
                    <x-base.heading>Komfort i Spokój w Sercu Tatr</x-base.heading>
                    <x-base.section-description>Nasz apartament typu Standard w Zakopanem to idealne miejsce dla
                        poszukiwaczy górskiego spokoju. Eleganckie wyposażenie, w tym aneks kuchenny i łazienka, zapewniają
                        komfortowy wypoczynek, a duże łóżko i rozkładana sofa są gwarancją odprężenia po dniu pełnym
                        wrażeń.</x-base.section-description>

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
                        <x-base.heading class="font-semibold">Apartament typu Standard</x-base.heading>
                        <x-base.button href="#">Sprawdź dostępność </x-base.button>
                    </div>

                    {{-- ICONS --}}
                    @include('pages.apartments.sections.features')

                    {{-- AMENITIES --}}
                    @include('pages.apartments.sections.amenities')
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
                @include('pages.apartments.sections.other_rooms')



        </main>
    </x-layouts.master>
