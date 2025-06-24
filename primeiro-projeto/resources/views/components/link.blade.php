@props(['href', 'block' => null, 'outline' => null])

<a href="{{ $href }}"
    {{ $attributes->class(['btn btn-info', 'btn-block' => $block, 'btn-outline' => $outline]) }}>
    {{ $slot }} </a>
