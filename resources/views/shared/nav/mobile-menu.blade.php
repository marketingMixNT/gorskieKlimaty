<div id="menu"
    class="menu-close fixed top-[84px] sm:top-[131px] bottom-0 left-0 right-0 bg-secondary-400 z-50 flex flex-col justify-center items-center">

    {{-- NAV ITEMS --}}
    @include('shared.nav.mobile-nav-items')

    <!--MOBILE LANGUAGE SWITCHER-->
    <div class="lg:hidden mt-6 absolute right-5 bottom-5 text-white">
        <ul class="flex justify-center items-center gap-5 list-none">
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a rel="alternate" hreflang="{{ $localeCode }}"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        class="duration-300 link-hover--white uppercase">
                        {{ $properties['slug'] }}
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
    <!--SOCIAL-->
    <div class="flex justify-center items-center gap-4 absolute left-5 bottom-5 lg:static">
        <a href="https://www.facebook.com/villagorskieklimaty/?locale=pl_PL" target="_blank"><img
                src="{{ asset('/assets/icons/facebook--light.svg') }}" alt="logo facebooka"
                class="w-6 2xl:w-8 hover:scale-90 duration-300 opacity-70" /></a>
        <a href="https://www.tripadvisor.com/Hotel_Review-g274793-d15614770-Reviews-Villa_Gorskie_Klimaty-Zakopane_Lesser_Poland_Province_Southern_Poland.html"
            target="_blank"><img src="{{ asset('/assets/icons/tripadvisor--light.svg') }}" alt="logo tripadvisor"
                class="w-7 2xl:w-9 hover:scale-90 duration-300 opacity-70" /></a>
    </div>
</div>

</div>
