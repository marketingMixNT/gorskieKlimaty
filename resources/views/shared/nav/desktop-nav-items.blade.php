<ul class="text-white flex gap-12">
        
    <x-nav.nav-item href="{{route('about')}}">O Nas</x-nav.nav-item>
  
<!-- DROPDOWN BUTTON -->
    <li id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class=" inline-flex items-center uppercase text-sm" type="button"><a href="{{route('apartments.index')}}">Apartamenty</a><svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
        </li>
        
        <!-- DROPDOWN MENU -->
        <div id="dropdownHover" class="z-10 hidden bg-white   shadow ">
            <ul class="py-4  text-fontDark" aria-labelledby="dropdownHoverButton">

                <x-nav.dropdown-nav-item href="{{route('apartments.standard')}}">Apartament typu standard</x-nav.dropdown-nav-item>
                <x-nav.dropdown-nav-item href="{{route('apartments.studio')}}">Apartament typu studio</x-nav.dropdown-nav-item>
                <x-nav.dropdown-nav-item href="{{route('apartments.one_bedroom')}}">Apartament z 1 sypialnią</x-nav.dropdown-nav-item>
            
             
            </ul>
        </div>

<x-nav.nav-item href="{{route('attractions')}}">Atrakcje</x-nav.nav-item>
<x-nav.nav-item href="#">Galeria</x-nav.nav-item>
<x-nav.nav-item href="#">Kontakt</x-nav.nav-item>



</ul>