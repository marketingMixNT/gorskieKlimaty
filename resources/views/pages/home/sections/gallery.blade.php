<section>
    <div class="wrapper max-w-screen-xl text-center">
        <x-base.section-heading>Galeria</x-base.section-heading>
        <hr class="hr mx-auto mt-12 my-24">
        <div class="flex flex-col justify-center items-center gap-12">

            <div class="grid md:grid-cols-3 gap-12">

                <div class="md:col-span-2 max-h-[350px] w-full overflow-hidden">
                    <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                        class="h-full w-full object-cover duration-300 hover:scale-110">
                </div>
                <div class=" overflow-hidden max-h-[350px]">
                    <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                        class=" h-full w-full object-cover duration-300 hover:scale-110">
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-12">

               
                <div class=" overflow-hidden max-h-[350px]">
                    <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                        class=" h-full w-full object-cover duration-300 hover:scale-110">
                </div>
                <div class="md:col-span-2 max-h-[350px] w-full overflow-hidden">
                    <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                        class="h-full w-full object-cover duration-300 hover:scale-110">
                </div>
            </div>


           


            <x-base.button href="#">Zobacz</x-base.button>

        </div>
    </div>
</section>
