@props(['class' => ''])
<label {{ $attributes ->merge(['class' => $class])}}>
    {{ $slot }}
</label>