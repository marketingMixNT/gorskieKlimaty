@props(['type' => 'primary', 'href' => 'string','class'=>'string'])



<a href="{{ $href }}"><button
        class="border py-4 px-10 uppercase text-sm font-semibold  duration-300 
    {{ $type === 'primary' ? ' border-secondary-400 bg-secondary-400 text-fontLight hover:bg-secondary-200 ' : '' }} 
    {{ $type === 'secondary' ? 'border-white bg-white text-fontDark' : '' }} 
    {{ $type === 'third' ? 'border-action-400 bg-action-400 text-fontDark hover:bg-white ' : '' }} 
     
      {{$class}}">{{ $slot }}</button></a>
