<div class="grid  lg:grid-cols-2 gap-10 2xl:gap-20">

@foreach ($otherApartments as $apartment)

<x-other-apartment-block title="{{$apartment['title']}}" img="{{$apartment['image']}}" persons="{{$apartment['persons']}}" link="{{$apartment['link']}}" size="{{$apartment['size']}}"/>
@endforeach

   


</div>