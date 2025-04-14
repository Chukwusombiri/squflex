@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-primary-lighter text-lg font-medium leading-5 text-primary-lighter focus:outline-none focus:border-gray-950 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-lg font-medium leading-5 text-primary-light hover:text-primary-lighter hover:border-primary-lighter focus:outline-none focus:text-primary-lighter focus:border-primary-lighter transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>