<section id="apartamenty">
    <div class="wrapper max-w-screen-xl">
        <div class="flex flex-col justify-center items-center gap-12">

            <x-base.section-heading>Apartamenty</x-base.section-heading>
            <x-base.section-description class='text-center'>W naszym obiekcie oferujemy przytulne apartamenty z osobnymi
                łazienkami, które gwarantują wyjątkowy komfort podczas pobytu. Dzięki wyjątkowej lokalizacji, nasze
                miejsce stanowi idealną bazę wypadową do odkrywania górskich szlaków i przygód. Nasz profesjonalny
                personel zawsze jest gotowy, aby zadbać o każdy, nawet najmniejszy detal Twojego pobytu, zapewniając
                niezapomniane doświadczenia.</x-base.section-description>
            <hr class="hr mx-auto">
        </div>

        {{-- APARTMENTS SLIDER --}}
        <div id="apartamentsSwiper" class="mt-16 px-12 2xl:px-4 max-w-screen-2xl"><apartaments-swiper :apartments="{{ json_encode($apartments) }}"></apartaments-swiper>
        </div>


    </div>
</section>
