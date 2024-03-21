<x-layouts.master>

    @section('title', 'Galeria Villa Górskie Klimaty – Odkryj Piękno Zakopanego')
    @section('description',
        'Zapraszamy do naszej galerii, by zobaczyć urok i atmosferę Villa Górskie Klimaty.
        Przeglądaj zdjęcia apartamentów i otaczających je tatrzańskich krajobrazów.')

        {{-- HEADER --}}
        <x-base.header title="Galeria" bgi='gallery-hero'>
            <x-base.button type='third' class="lg:hidden mt-12" href="#">Rezerwuj</x-base.button>
            <!--RESERVATION PANEL-->
            <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>
        </x-base.header>

        {{-- MAIN --}}
        <main>
            <div class="wrapper pt-0 max-w-screen-2xl">


                {{--STYLE IN scss/gallery.scss--}}
                <section id="gallery">

                    <!--BUTTONS-->
                    <div class="items-links px-12 py-24 flex justify-center items-center flex-wrap gap-6">
                        <button class="item-link menu-active" data-name="all">Wszytkie</button>
                        <button class="item-link" data-name="1">Standard</button>
                        <button class="item-link" data-name="2">Studio</button>
                        <button class="item-link" data-name="3">Jedna Sypialnia</button>
                    </div>

                    {{-- GALLERY GRID --}}
                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">

                        {{-- STANDARD --}}
                        @foreach ($standardImages as $img)
                            <div class="grid-item" data-name='1'>
                                <a href="{{ asset($img['full']) }}" class="glightbox">
                                    <img src="{{ asset($img['thumbnail']) }}"
                                        alt="apartament typu Standard w Villa Górskie Klimaty" width="500" height='400'
                                        loading="lazy" />
                                </a>
                            </div>
                        @endforeach
                         {{-- STUDIO --}}
                         @foreach ($studioImages as $img)
                         <div class="grid-item" data-name='2'>
                             <a href="{{ asset($img['full']) }}" class="glightbox">
                                 <img src="{{ asset($img['thumbnail']) }}"
                                     alt="apartament typu Studio w Villa Górskie Klimaty" width="500" height='400'
                                     loading="lazy" />
                             </a>
                         </div>
                     @endforeach
                        {{-- ONEBEDROOM --}}
                        @foreach ($onebedroomImages as $img)
                            <div class="grid-item" data-name='3'>
                                <a href="{{ asset($img['full']) }}" class="glightbox">
                                    <img src="{{ asset($img['thumbnail']) }}"
                                        alt="apartament z jedną sypialnią w Villa Górskie Klimaty" width="500" height='400'
                                        loading="lazy" />
                                </a>
                            </div>
                        @endforeach

        </main>
    </x-layouts.master>
