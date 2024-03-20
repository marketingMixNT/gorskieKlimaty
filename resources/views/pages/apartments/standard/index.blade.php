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
                {{-- THUMBNAIL --}}
                <div id="ApartmentMainImage">
                    <apartament-main-image :images='{{ json_encode($images) }}'></apartament-main-image>
                </div>




                {{-- CONTENT --}}
                <div class="flex flex-col justify-center items-center gap-12 lg:gap-16 max-w-screen-xl mt-24 mx-auto">





                    {{-- TITLE --}}
                    <div class="flex justify-between w-full items-center pb-12 border-b">
                        <x-base.heading class="font-semibold">Apartament typu Standard</x-base.heading>
                        <x-base.button href="#">Sprawdź dostępność </x-base.button>
                    </div>
                    {{-- ICONS --}}

                    <div
                        class="flex flex-wrap gap-6 xl:gap-24 pb-12 border-b w-full items-center justify-center md:opacity-0 opacity-animation">

                        <div class="flex justify-center items-center gap-4">
                            <img src="/assets/icons/persons.svg" alt="" class="w-12" /><span
                                class="text-lg whitespace-nowrap">max 5
                                os.</span>
                        </div>
                        <div class="flex justify-center items-center gap-4 p">
                            <img src="/assets/icons/size.svg" alt="" class="w-9" /><span
                                class="text-lg whitespace-nowrap">37 m²</span>
                        </div>
                        <div class="flex justify-center items-center gap-4">
                            <img src="/assets/icons/mountain.svg" alt="" class="w-12" /><span
                                class="text-lg whitespace-nowrap">Widok na góry</span>
                        </div>

                    </div>
                    {{-- AMENITIES --}}
                    <div class="flex flex-col justify-between items-start pb-12 border-b w-full gap-12">

                        <span class="text-2xl font-semibold  ">
                            Udogodnienia
                        </span>
                        <div class="grid grid-cols-3 gap-x-20 gap-y-8 w-full">

                            @foreach ($amenities as $item)
                                <div
                                    class="border flex justify-start items-center p-4 gap-4 pl-12 hover:shadow-lg duration-300 group">
                                    <img src="{{ asset($item['icon']) }}" alt=""
                                        class="w-10 group-hover:scale-105 duration-300"><span>{{ $item['name'] }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>




                </div>
            </div>
            <!--SLIDER-->
            <div id="ApartmentSlider" class=" mx-12 sm:mx-6 ">
                <apartament-slider :images='{{ json_encode($images) }}'></apartament-slider>

                <div class="flex flex-col justify-center items-center gap-12 my-12">
                    <x-base.button class="">Galeria</x-base.button>
                    <hr class="w-1/2 border border-black">
                    <div class="be-panel   bottom-24  px-4 bg-bgDark-400"></div>
                </div>
            </div>
            <!--OTHER ROOMS-->
            <div class="wrapper max-w-screen-xl">

                <div class="grid grid-cols-2 gap-20">
                   


{{--1--}}
                    <div class="flex flex-col  gap-6   group shadow-lg hover:shadow-2xl duration-300 border  md:opacity-0 opacity-animation md:m-12 lg:m-0">

                        {{-- IMG --}}
                        <div class=" max-h-[400px] overflow-hidden">
                            <img src="{{ asset('assets/images/gorskie_klimaty-1.jpg')}}" alt="wnętrze apartamentu "
                                class="w-full h-full object-cover duration-300 group-hover:scale-110">
                        </div>
                        {{-- TEXT --}}
                        <div class="flex flex-col justify-evenly items-start p-8 pb-12  xl:p-4 gap-10 ">
                              {{-- TITLE --}}
                              <span class="text-3xl font-semibold  ">
                                Apartament s
                              </span>
                            {{-- ICONS --}}
                            <div class="flex flex-wrap gap-8 xl:gap-12">
                    
                                <div class="flex justify-center items-center gap-4">
                                    <img src="/assets/icons/persons.svg" alt="" class="w-8" /><span class="text-sm whitespace-nowrap">max 3
                                        os.</span>
                                </div>
                                <div class="flex justify-center items-center gap-4 p">
                                    <img src="/assets/icons/size.svg" alt="" class="w-5" /><span class="text-sm whitespace-nowrap">5 m²</span>
                                </div>
                                <div class="flex justify-center items-center gap-4">
                                    <img src="/assets/icons/mountain.svg" alt="" class="w-8" /><span class="text-sm whitespace-nowrap">Widok na góry</span>
                                </div>
                    
                            </div>
                              {{-- DESCRIPTION --}}
                            <a href="" class="link-hover">Sprawdź</a>
                    
                        </d>
                    
                    </div>
                </div>


{{--2--}}
                <div class="flex flex-col  gap-6   group shadow-lg hover:shadow-2xl duration-300 border  md:opacity-0 opacity-animation md:m-12 lg:m-0">

                    {{-- IMG --}}
                    <div class=" max-h-[400px] overflow-hidden">
                        <img src="{{ asset('assets/images/gorskie_klimaty-1.jpg')}}" alt="wnętrze apartamentu "
                            class="w-full h-full object-cover duration-300 group-hover:scale-110">
                    </div>
                    {{-- TEXT --}}
                    <div class="flex flex-col justify-evenly items-start p-8 pb-12  xl:p-4 gap-10 ">
                          {{-- TITLE --}}
                          <span class="text-3xl font-semibold  ">
                            Apartament s
                          </span>
                        {{-- ICONS --}}
                        <div class="flex flex-wrap gap-8 xl:gap-12">
                
                            <div class="flex justify-center items-center gap-4">
                                <img src="/assets/icons/persons.svg" alt="" class="w-8" /><span class="text-sm whitespace-nowrap">max 3
                                    os.</span>
                            </div>
                            <div class="flex justify-center items-center gap-4 p">
                                <img src="/assets/icons/size.svg" alt="" class="w-5" /><span class="text-sm whitespace-nowrap">5 m²</span>
                            </div>
                            <div class="flex justify-center items-center gap-4">
                                <img src="/assets/icons/mountain.svg" alt="" class="w-8" /><span class="text-sm whitespace-nowrap">Widok na góry</span>
                            </div>
                
                        </div>
                          {{-- DESCRIPTION --}}
                        <a href="" class="link-hover">Sprawdź</a>
                
                    </d>
                
                </div>
            </div>


            </div>


        </main>
    </x-layouts.master>
