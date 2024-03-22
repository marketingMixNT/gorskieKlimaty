<div class="bg-secondary-400 hidden lg:flex justify-between items-center py-2 px-20  sticky top-0 right-0 left-0 z-50">

    {{-- LOGO --}}
    <img src="{{ asset('assets/logo/logo.png') }}" alt="logo Villa Górskie Klimaty" x-data="{ y: 0 }"
        @scroll.window="y = $event.target.scrollingElement.scrollTop" :class="{ 'opacity-100': y >= 100 }"
        class="w-16 opacity-0 duration-300">

    {{-- NAV ITEMS --}}
    @include('shared.nav.desktop-nav-items')


    {{-- BUTTON --}}
    <a href="#"><button class="border border-action-400 text-fontLight hover:bg-action-400 hover:text-secondary-400 py-2 px-10 uppercase text-sm duration-300" aria-label='rezerwuj'>Rezerwuj</button></a>
</div>
