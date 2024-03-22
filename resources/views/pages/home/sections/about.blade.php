<section>
    <div class="wrapper max-w-screen-xl ">

        <div class="flex flex-col lg:flex-row justify-center items-center gap-12">

            <div class="lg:w-1/2 flex flex-col justify-center lg:justify-start items-center lg:items-start gap-10 order-1 lg:order-none">
                <x-base.heading>O nas</x-base.heading>
                <hr class="hr ">
                <x-base.description > Villa "Górskie Klimaty" to wyjątkowe miejsce, w którym tradycja spotyka się z nowoczesnością, oferując gościom niezapomniane wrażenia i wypoczynek na najwyższym poziomie. Położona w sercu Zakopanego, otoczona majestatycznymi szczytami Tatr, nasza willa stanowi idealną bazę dla miłośników górskich przygód oraz tych, którzy pragną na chwilę uciec od codziennej rutyny i zaznać spokoju wśród natury. Każdy element naszego obiektu został zaprojektowany z myślą o komforcie i zadowoleniu naszych gości, od elegancko urządzonych pokoi, przez domową atmosferę, aż po indywidualne podejście do potrzeb każdego odwiedzającego. </x-base.description>
                <x-base.button href="{{route('about')}}" aria-label="Dowiedz się więcej">Dowiedz się więcej</x-base.button>

            </div>
            <div class="lg:w-1/2 ">
                <img src="{{ asset('assets/images/mobile/gorskie_klimaty-11.jpg') }}" alt="wnętrze appartamentu w Villa Górskie Klimaty" loading="lazy" width='400' height='300' class=" max-h-[550px] sm:hidden">
                <img src="{{ asset('assets/images/gorskie_klimaty-11.jpg') }}" alt="wnętrze appartamentu w Villa Górskie Klimaty" loading="lazy" width='400' height='300' class="hidden sm:block max-h-[550px] opacity-0 image-animation-top">
              
            </div>
        </div>

    </div>
</section>
