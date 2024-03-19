<x-layouts.master>

    @section('title', 'Poznaj Nas – Villa Górskie Klimaty: Gdzie Gościnność Spotyka Góry')
    @section('description',
        'Dowiedz się więcej o Villa Górskie Klimaty w Zakopanem. Nasza historia, misja i pasja do
        gór tworzą wyjątkowe miejsce na Twoją górską przygodę.')

        {{-- HEADER --}}
        <x-base.header title="O nas" bgi='about-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper max-w-screen-2xl">
                <div class="flex flex-col justify-center items-center gap-12">

                    <x-base.section-heading>Góralska Gościnność w Nowoczesnym Wydaniu</x-base.section-heading>

                    <hr class="hr mx-auto">
                </div>
                {{-- CONTENT --}}
                <div class="flex flex-col justify-center items-center gap-12 lg:gap-24 max-w-screen-xl mt-24 mx-auto">

                    <x-content-block heading='Zakopiańska Elegancja'
                        src=" {{ asset('assets/images/gorskie_klimaty-75.jpg') }}"
                        alt='wnętrze apartamentu w Villa Górskie Klimaty' width='600' height='400' loading='lazy' order='order-1 lg:order-none'>Villa Górskie Klimaty to wyjątkowe miejsce,
                        gdzie nowoczesność splata się z tradycją góralską. Położona w sercu Zakopanego, tuż przy słynnych
                        Krupówkach, oferuje gościom nie tylko komfortowe zakwaterowanie, ale i niezapomniane wrażenia
                        estetyczne.</x-content-block>

                    <x-content-block heading='Komfort i Wygoda'
                        src=" {{ asset('assets/images/gorskie_klimaty-41.jpg') }}" alt='Gubałówka' width='600' height='400' loading='lazy'
                        order='order-1'>Nasze apartamenty zostały zaprojektowane z myślą o najwyższym komforcie i wygodzie
                        gości. Każdy z nich wyposażony jest w nowoczesne udogodnienia, takie jak system wentylacji Zehnder
                        ComfoAir, ogrzewanie podłogowe oraz dostęp do szybkiego internetu Wi-Fi, gwarantując przyjemny pobyt
                        niezależnie od pory roku.</x-content-block>

                    <x-content-block heading='Atrakcje na Wyciągnięcie Ręki'
                        src=" {{ asset('assets/images/gorskie_klimaty-40.jpg') }}" width='600' height='400' loading='lazy'
                        alt='Krupówki w Zakopanym' order='order-1 lg:order-none'>Dzięki doskonałej lokalizacji, Villa Górskie Klimaty stanowi idealną bazę wypadową do odkrywania zakopiańskich atrakcji. Wszystko, co najlepsze w Zakopanem, znajduje się w bliskiej odległości: od Krupówek, przez Park im. Marszałka Piłsudskiego, aż po kolejki na Kasprowy Wierch czy Gubałówkę.</x-content-block>

                    <x-content-block heading='Spokój i Relaks'
                        src=" {{ asset('assets/images/gorskie_klimaty-37.jpg') }}" alt='Gubałówka' width='600' height='400' loading='lazy'
                        order='order-1'> Po dniu pełnym wrażeń, nasi goście mogą odprężyć się w przytulnym ogrodzie lub na balkonie z widokiem na góry. Villa Górskie Klimaty to miejsce, gdzie można znaleźć chwilę spokoju i zregenerować siły, ciesząc się pięknem otaczającej przyrody.</x-content-block>

                </div>
            </div>
            </div>

            {{-- MAP --}}
            @include('shared.map')

        </main>
    </x-layouts.master>
