<section>
    <div class="wrapper max-w-screen-xl">
        <x-base.section-heading>Apartamenty</x-base.section-heading>
        <x-base.section-description class='text-center'>W naszym obiekcie znajdziesz 12 przytulnych pokoi z osobnymi łazienkami,
            zapewniających wyjątkowy komfort podczas pobytu. Położenie naszego miejsca sprawia, że stanowi doskonałą
            bazę wypadową do górskich przygód. Profesjonalny personel jest gotowy zadbać o każdy detal Twojego pobytu,
            zapewniając niezapomniane doświadczenie.</x-base.section-description>

        {{-- APARTMENTS SLIDER --}}
        <div class="grid grid-cols-3 gap-12 pt-16 pb-12">
            {{--ITEM--}}
            <div class="shadow-xl">
                <img src="{{asset('assets/images/header--big.webp')}}" alt="">
                <div class="flex flex-col justify-center items-center py-12">
                    <h3>Rodzinny Pokój Deluxe z Balkonem</h3>
                    <div>
                        <span>item</span>
                        <span>item</span>
                        <span>item</span>
                    </div>
                    <a href="">zobacz</a>
                </div>
            </div>
            {{--ITEM--}}
            <div class="shadow-xl">
                <img src="{{asset('assets/images/header--big.webp')}}" alt="">
                <div class="flex flex-col justify-center items-center py-12">
                    <h3>Rodzinny Pokój Deluxe z Balkonem</h3>
                    <div>
                        <span>item</span>
                        <span>item</span>
                        <span>item</span>
                    </div>
                    <a href="">zobacz</a>
                </div>
            </div>
            {{--ITEM--}}
            <div class="shadow-xl">
                <img src="{{asset('assets/images/header--big.webp')}}" alt="">
                <div class="flex flex-col justify-center items-center py-12">
                    <h3>Rodzinny Pokój Deluxe z Balkonem</h3>
                    <div>
                        <span>item</span>
                        <span>item</span>
                        <span>item</span>
                    </div>
                    <a href="">zobacz</a>
                </div>
            </div>
        </div>
    </div>
</section>
