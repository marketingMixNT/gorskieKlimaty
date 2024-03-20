<x-layouts.master>

    @section('title', 'Apartamenty Villa Górskie Klimaty – Luksusowy Wypoczynek w Zakopanem')
    @section('description', 'Zarezerwuj swój apartament w Villa Górskie Klimaty. Oferujemy komfort, styl i niezapomniane
        widoki na Tatry, idealne dla rodzin i par szukających relaksu.')

        {{-- HEADER --}}
        <x-base.header title="Apartamenty" bgi='apartments-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper max-w-screen-2xl">
                <div class="flex flex-col justify-center items-center gap-12">

                    <x-base.section-heading>Odkryj Luksus w Sercu Tatr</x-base.section-heading>
                    <x-base.section-description>Zanurz się w komforcie Villi Górskie Klimaty, gdzie każdy apartament to
                        synonim luksusu i spokoju. Nasze przestronne apartamenty są wyposażone w nowoczesne aneksy kuchenne
                        z lodówką, zmywarką i mikrofalówką, zapewniając wszystko, czego potrzebujesz do przygotowania
                        ulubionych posiłków. Zrelaksuj się w eleganckim wnętrzu z bezpłatnym dostępem do Wi-Fi i ciesz się
                        prywatnością z dala od miejskiego zgiełku. Villa Górskie Klimaty oferuje również bezpłatny parking,
                        co gwarantuje bezproblemowy pobyt w sercu Zakopanego.</x-base.section-description>

                    <hr class="hr mx-auto">
                </div>
                {{-- CONTENT --}}
                <div class="flex flex-col justify-center items-center gap-12 lg:gap-16 max-w-screen-xl mt-24 mx-auto">


                    @foreach ($apartments as $apartment)
                        

                        <x-apartment-block title="{{ $apartment['title'] }}" img="{{ $apartment['image'] }}"
                            persons="{{ $apartment['persons'] }}" description="{{ $apartment['description'] }}"
                            link="{{ $apartment['link'] }}" size="{{ $apartment['size'] }}" />
                    @endforeach

                </div>
            </div>
            </div>

            {{-- MAP --}}
            @include('shared.map')

        </main>
    </x-layouts.master>
