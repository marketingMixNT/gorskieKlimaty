<x-layouts.master>

    {{-- @section('title', __('home.title') )
    @section('description',
       __('home.description')) --}}
    @section('title', 'Villa Górskie Klimaty – Twoje Wyjątkowe Miejsce Wypoczynku w Sercu Zakopanego' )
    @section('description',
       'Odkryj urok Zakopanego z Villa Górskie Klimaty: idealne miejsce dla szukających relaksu w Tatrach. Komfortowe pokoje, bliskość atrakcji i niezapomniane widoki.')


@include('pages.home.sections.header')
@include('pages.home.sections.apartments')
@include('pages.home.sections.amenities')
@include('pages.home.sections.about')
@include('pages.home.sections.hero')
@include('pages.home.sections.attractions')
@include('pages.home.sections.gallery')



</x-layouts.master>