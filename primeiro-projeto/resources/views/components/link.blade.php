@props(['href', 'wide' => null, 'outline' => null])

<a href="{{ $href }}" {{ $attributes->class(['btn btn-info', 'btn-wide' => $wide, 'btn-outline' => $outline]) }}>
    {{ $slot }} </a>
