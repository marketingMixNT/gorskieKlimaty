<nav class="bg-primary-400  z-50 fixed top-0 left-0 right-0 lg:static">
    <div class="flex justify-between items-center max-w-screen-2xl mx-auto py-4 sm:py-10 px-4 md:px-12 2xl:px-0">
        <!--LEFT SIDE-->
        <div class="flex justify-center items-center gap-6 xl:gap-12 ">

            <a href="tel:607 299 115" class=" mb-1 hidden lg:inline-block duration-300 link-hover ">+48 607 299 115</a>
            <a href="mailto:kontakt@gorskieklimaty.pl" class=" mb-1 hidden lg:inline-block duration-300 link-hover ">kontakt@gorskieklimaty.pl</a>
            <div class="hidden xs:flex lg:hidden gap-3">

                <x-socials />
            </div>
        </div>
      
        <!--CENTER-->
        <a href="{{ route('home') }}" class="absolute left-1/2 transform -translate-x-1/2 ">
            <img src="{{asset('/assets/logo/logo.jpeg')}}" alt="logo Villa Górskie Klimaty" class=" w-16 sm:w-24 " />
        </a>
        <!--RIGHT SIDE-->
        <div class="flex justify-center items-center gap-12 ">

            <x-nav.language-switcher />

            <div class="hidden lg:flex  gap-3">
            <x-socials />
            </div>


            <x-nav.hamburger-btn />

        </div>


</nav>
