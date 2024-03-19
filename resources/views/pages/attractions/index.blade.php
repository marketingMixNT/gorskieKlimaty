<x-layouts.master>

    @section('title', 'Atrakcje Zakopanego – Odkryj z Villa Górskie Klimaty')
    @section('description',
        'Zaplanuj swoją przygodę w Zakopanem z naszym przewodnikiem po najlepszych atrakcjach. Krupówki, Gubałówka, Muzeum Szymanowskiego i więcej czeka!')

        {{-- HEADER --}}
        <x-base.header title="Atrakcje" bgi='attractions-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper max-w-screen-2xl">
                <div class="flex flex-col justify-center items-center gap-12">

                    <x-base.section-heading>Poznaj Najpiękniejsze Miejsca i Atrakcje</x-base.section-heading>

                    <hr class="hr mx-auto">
                </div>
                {{-- CONTENT --}}
                <div class="flex flex-col justify-center items-center gap-12 lg:gap-24 max-w-screen-xl mt-24 mx-auto">

                    <x-content-block heading='Krupówki'
                        src=" {{ asset('assets/images/atrakcje/gorskie_klimaty_atrakcje-2.jpg') }}"
                        alt='Krupówki'  order='order-1 lg:order-none'> Krupówki to serce Zakopanego, tętniąca życiem ulica pełna regionalnych sklepów, kawiarni i restauracji. To tutaj odbywa się większość miejskich wydarzeń, a turystyka kwitnie przez cały rok. Spacerując po Krupówkach, można poczuć prawdziwą atmosferę Podhala, podziwiać lokalne rękodzieło i skosztować tradycyjnych potraw góralskich. Ulica ta jest także doskonałym miejscem do obserwowania górskiego krajobrazu i wypoczynku po dniu pełnym wrażeń</x-content-block>

                    <x-content-block heading='Gubałówka'
                    src=" {{ asset('assets/images/atrakcje/gorskie_klimaty_atrakcje-1.jpg') }}" alt='Gubałówka' 
                        order='order-1'>Stacja dolna Gubałówki to początek kolejnej popularnej atrakcji Zakopanego. Kolej linowo-terenowa zabiera pasażerów na szczyt Gubałówki, skąd rozciąga się malowniczy widok na miasto i okoliczne góry. Jest to idealne miejsce do podziwiania panoramy Zakopanego i fotografowania tatrzańskiego krajobrazu4.</x-content-block>

                    <x-content-block heading='Muzeum Szymanowskiego'
                    src=" {{ asset('assets/images/atrakcje/gorskie_klimaty_atrakcje-3.jpg') }}" 
                        alt='Muzeum Szymanowskiego' order='order-1 lg:order-none'>Muzeum Szymanowskiego w Zakopanem to perła kulturalna poświęcona życiu i twórczości Karola Szymanowskiego, jednego z najwybitniejszych polskich kompozytorów. Zlokalizowane w willi "Atma", niegdyś rezydencji samego artysty, muzeum oferuje unikalne wgląd w jego muzyczny świat. Eksponaty, osobiste przedmioty oraz urzekające wnętrza przenoszą odwiedzających w czasie, oferując intymne spojrzenie na życie i inspiracje Szymanowskiego. Wizyta w muzeum to nie tylko lekcja historii muzyki, ale także niezwykła podróż do epoki, w której muzyka łączyła się z pięknem tatrzańskiego krajobrazu, inspirując kompozytora do tworzenia swoich nieśmiertelnych dzieł.</x-content-block>

                        <x-content-block heading='Kasprowy Wierch'
                        src=" {{ asset('assets/images/atrakcje/gorskie_klimaty_atrakcje-4.jpg') }}"  alt='Kasprowy Wierch' 
                        order='order-1'>Kolejka na Kasprowy Wierch to brama do wypraw w wysokie Tatry. Podróż z Kuźnic na szczyt Kasprowego Wierchu trwa zaledwie kilkanaście minut, ale zapewnia niezapomniane widoki na otaczające szczyty i doliny. Na miejscu można podziwiać panoramę Tatr, a także skorzystać z tras narciarskich czy szlaków turystycznych.</x-content-block>

                </div>
            </div>
            </div>

            {{-- MAP --}}
            @include('shared.map')

        </main>
    </x-layouts.master>
