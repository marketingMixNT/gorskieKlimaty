<div class="flex flex-col justify-start items-start gap-8 ">
    <x-base.heading>Kontakt</x-base.heading>
    {{-- TEL --}}
    <a href="tel:+48182071252"
        class="flex justify-center items-center link-hover gap-6 text-xl"><img
            src="{{ asset('assets/icons/phone.svg') }}" alt="" class="w-8">+48 18 20 712
        52</a>
    {{-- MAIL --}}
    <a href="mailto:kontakt@gorskieklimaty.pl"
        class="flex justify-center items-center link-hover gap-6 text-xl"><img
            src="{{ asset('assets/icons/envelope.svg') }}" alt=""
            class="w-6">kontakt@gorskieklimaty.pl</a>
    {{-- MAP --}}
    <a href="https://maps.app.goo.gl/X9e6LjMZjnJvs8L46" target="_blank"
        class="flex justify-center items-center link-hover gap-6 text-xl"><img
            src="{{ asset('assets/icons/map.svg') }}" alt="" class="w-6">Szlak Papieski
        252 <br>
        34-521 Ząb</a>

    <x-base.heading class="mt-6">Social Media</x-base.heading>
    {{-- TEL --}}
    <div class="flex gap-4">

        <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"
            class="flex justify-center items-center  gap-6 text-xl"><img
                src="{{ asset('assets/icons/facebook--dark.svg') }}" alt=""
                class="w-10 hover:scale-110 duration-300"></a>
        <a href="https://www.facebook.com/zajazdsleboda/?locale=pl_PL" target="_blank"
            class="flex justify-center items-center  gap-6 text-xl"><img
                src="{{ asset('assets/icons/tripadvisor--dark.svg') }}" alt=""
                class="w-10 hover:scale-110 duration-300"></a>
    </div>

</div>