<footer class="bg-secondary-400 py-12 text-fontLight pb-24 lg:pb-12">
    <!--CONTAINER-->
    <div class="max-w-screen-xl mx-auto space-y-10">
        <!--GRID-->
        <div
            class="flex flex-col gap-10 sm:gap-0  s justify-center items-center sm:items-start sm:grid sm:grid-rows-2 lg:grid-rows-1 sm:grid-cols-3 lg:grid-cols-4 mx-4">
            <!--ONE-->
            <div class="flex items-center justify-center col-span-4 lg:col-span-1">
                <a href="/">
                    <img src="{{ asset('/assets/logo/logo.png') }}" alt="logo Villa Górskie Klimaty"
                        class="w-32 lg:ml-16" /></a>
            </div>
            <!--TWO-->
            <div
                class=" mx-4 md:mx-12 flex flex-col gap-6 justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2">
                        Zadzwoń do nas
                    </h2>
                    <a href="tel:+48607299115" class="font-thin font-heading link-hover--white">+48 607 299 115</a>
                </div>
                <div>
                    <h2 class="font-heading text-lg uppercase mb-2">
                        Napisz do nas
                    </h2>
                    <a href="mailto:kontakt@gorskieklimaty.pl"
                        class="font-thin font-heading link-hover--white">kontakt@gorskieklimaty.pl</a>
                </div>
            </div>
            <!--THREE-->
            <div
                class="mx-4 md:mx-12 flex flex-col justify-center items-center text-center sm:justify-start sm:items-start sm:text-start">
                <h2 class="font-heading text-lg uppercase mb-2">Adres</h2>
                <a href="https://maps.app.goo.gl/DPkgB5eGdbHsEsmVA" target="_blank"
                    class="font-thin font-heading link-hover--white">Józefa Piłsudzkiego 2D<br />34-500 Zakopane</a>
            </div>
            <!--FOUR-->
            <div class="mx-4  md:mx-12">
                <h2 class="font-heading text-lg uppercase mb-2 ">
                    Social Media
                </h2>
                <div class="flex justify-center sm:justify-start items-center gap-3">
                    <a href="https://www.facebook.com/villagorskieklimaty/?locale=pl_PL" target="_blank"><img
                            src="{{ asset('/assets/icons/facebook--light.svg') }}" alt=""
                            class="w-6 hover:scale-110 duration-300" /></a>
                    <a href="https://www.tripadvisor.com/Hotel_Review-g274793-d15614770-Reviews-Villa_Gorskie_Klimaty-Zakopane_Lesser_Poland_Province_Southern_Poland.html"
                        target="_blank"><img src="{{ asset('/assets/icons/tripadvisor--light.svg') }}" alt=""
                            class="w-7 hover:scale-110 duration-300" /></a>
                </div>
            </div>

        </div><!--END GRID-->
        <!--LINKS-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto">

            <hr class="opacity-40" />
            <ul class="flex justify-center items-center gap-8 text-xs py-4">
                <li>
                    <a href="" class="link-hover--white">Polityka Prywatności</a>
                </li>
                <li><a href="" class="link-hover--white"> Regulamin</a></li>
            </ul>
            <hr class="opacity-40" />
        </div>

        <!--BOTTOM-->
        <div class="max-w-screen-lg mx-4 sm:mx-24 xl:mx-auto text-sm  flex justify-between items-center">
            <a href="{{route('home')}}" class="flex gap-2 justify-start items-center link-hover--white">
                <span>© <span x-data="{ year: (new Date()).getFullYear() }" x-text="year"></span></span>
                <span>Villa Górskie Klimaty</span>
            </a>

            <div>
                <a href="https://marketingmix.pl" target="_blank" class="flex justify-center items-center"><img
                        src="{{ asset('/assets/marketingmix.svg') }}" class="w-40 hover:scale-110 duration-300"
                        alt="logo marketingmix" /></a>
            </div>
        </div>
    </div><!--END CONTAINER-->
</footer>
