<x-layouts.master>

    @section('title', 'Skontaktuj się z Nami – Villa Górskie Klimaty w Zakopanem')
    @section('description',
        'Masz pytania? Chcesz dokonać rezerwacji? Znajdź wszystkie potrzebne informacje kontaktowe
        na naszej stronie i odkryj, jak łatwo możesz do nas dotrzeć.')

        {{-- HEADER --}}
        <x-base.header title="Kontakt" bgi='contact-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper max-w-screen-2xl">
                <div class="flex flex-col justify-center items-center gap-12">

                    {{-- <x-base.section-heading>Góralska Gościnność w Nowoczesnym Wydaniu</x-base.section-heading> --}}
                    <x-base.section-description>W Villa Górskie Klimaty zależy nam na bezpośrednim kontakcie z naszymi
                        gośćmi. Czy masz pytania dotyczące rezerwacji, potrzebujesz dodatkowych informacji o naszych
                        apartamentach lub interesują Cię atrakcje Zakopanego – jesteśmy do Twojej dyspozycji. Skorzystaj z
                        poniższych danych kontaktowych, aby się z nami skontaktować. Nasz zespół z przyjemnością odpowie na
                        wszystkie pytania i pomoże dostosować pobyt do Twoich indywidualnych potrzeb, gwarantując
                        niezapomniane wrażenia podczas Twojego pobytu w sercu Tatr.</x-base.section-description>

                    <hr class="hr mx-auto">
                </div>
                {{-- CONTENT --}}
                <div class="mx-auto max-w-screen-xl  grid lg:grid-cols-2 mt-16 gap-20 lg:0">

                    {{-- INFO --}}
                    <div class="flex flex-col justify-center items-center">


                        @include('pages.contact.sections.info')





                    </div>

                    {{-- FORM --}}

                    <div>
                        @include('pages.contact.sections.form')
                    </div>
                </div>

            </div>
            </div>

            {{-- MAP --}}
            @include('shared.map')

        </main>
    </x-layouts.master>
