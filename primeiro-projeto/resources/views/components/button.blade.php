@props(['ghost' => null])


<button {{ $attributes->class(['btn btn-primary', 'btn-ghost' => $ghost]) }}>
    {{ $slot }}
</button>
