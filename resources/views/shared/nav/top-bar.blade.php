<nav class="bg-red-300 fixed left-0 top-0 right-0 z-50">
    <div class="flex justify-between items-center max-w-screen-2xl mx-auto py-4 sm:py-10 px-4 md:px-12 2xl:px-0">
        <!--LEFT SIDE-->
        <div class="flex justify-center items-center gap-12 ">

            <a href="tel:" class="text-sm mb-1 hidden lg:inline-block duration-300 link-hover">+48 18 20 712
                52</a>
            <a href="mailto:" class="text-sm mb-1 hidden lg:inline-block duration-300 link-hover">test@gmail.com</a>
        </div>
        <!--CENTER-->
        <a href="{{ route('home') }}" class="absolute left-1/2 transform -translate-x-1/2 ">
            <img src="{{asset('/assets/logo/logo.jpeg')}}" alt="logo Villa Górskie Klimaty" class=" w-16 sm:w-24 " />
        </a>
        <!--RIGHT SIDE-->
        <div class="flex justify-center items-center gap-12 ">

            <x-nav.language-switcher />
            <x-socials />


            <x-nav.hamburger-btn />

        </div>


</nav>
