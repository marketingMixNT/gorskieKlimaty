@props([
    'class' => '',
])


<p
    class="text-base 2xl:text-lg font-light max-w-screen-lg font-text leading-9 text-left md:opacity-0 text-animation {{ $class }}">
    {{ $slot }}
</p>
