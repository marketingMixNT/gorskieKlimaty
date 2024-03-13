<x-layouts.master>

    {{-- @section('title', __('home.title') )
    @section('description',
       __('home.description')) --}}
    @section('title', 'title' )
    @section('description',
       'desc')


@include('shared.nav.top-bar')
@include('shared.nav.nav-bar')
@include('shared.nav.mobile-menu')

</x-layouts.master>