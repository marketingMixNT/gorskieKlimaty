<x-layouts.master>

    {{-- @section('title', __('home.title') )
    @section('description',
       __('home.description')) --}}
    @section('title', 'title' )
    @section('description',
       'desc')


@include('pages.home.sections.header')
@include('pages.home.sections.apartments')
@include('pages.home.sections.amenities')
@include('pages.home.sections.about')
@include('pages.home.sections.hero')
@include('pages.home.sections.attractions')
@include('pages.home.sections.gallery')



</x-layouts.master>