<section>
    <div class="wrapper max-w-screen-xl">
        <x-base.section-heading>Galeria</x-base.section-heading>
        <hr class="hr mx-auto mt-12 my-24">
        <div class="flex flex-col justify-center items-center gap-12">

            <div class="grid grid-cols-3 gap-12">

                <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                    class="col-span-2 max-h-[350px] w-full object-cover">
                <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                    class=" h-full w-full object-cover">
            </div>
            <div class="grid grid-cols-3 gap-12">
                <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                    class=" h-full w-full object-cover">
                <img src="{{ asset('assets/images/header--big.webp') }}" alt=""
                    class="col-span-2 max-h-[350px] w-full object-cover">
            </div>
            

                <x-base.primary-button href="#">Zobacz</x-base.primary-button>
           
        </div>
    </div>
</section>
