<!--bgi in scss/header.scss and js/parials/headerBgi.js-->
<header id="header"
    class=" text-center relative flex flex-col justify-center items-center h-[calc(100vh-84px)]  lg:h-[calc(100vh-188px)] mt-[84px] lg:mt-0 w-full bg-cover bg-center bg-gray-400 bg-blend-multiply text-fontLight bg-7">

    <!--HEADING-->
    <div class="flex flex-col gap-9">

        <h1
            class="text-center text-4xl xs:text-5xl sm:text-6xl md:text-7xl lg:text-8xl tracking-wider uppercase font-heading font- heading-animation">
            Villa Górskie Klimaty

        </h1>
        <span class=" font-text text-sm md:text-xl  tracking-widest uppercase heading-animation ">Elegancja
            i Spokój pośród Tatrzanskich Szczytów</span>



        <x-base.button type="third" class="lg:hidden">Zarezerwuj</x-base.button>
    </div>



    <!--RESERVATION PANEL-->
    <div class="be-panel hidden lg:block absolute bottom-24  px-4 bg-bgDark-400"></div>


    <a href="#apartamenty" class="absolute bottom-5 left-5 flex text-sm font-heading uppercase">zobacz więcej
        <img src="{{ asset('/assets/icons/arrow-down.svg') }}" alt="" class="w-5 animate-bounce" /></a>
</header>
