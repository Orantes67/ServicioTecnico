@props(['class' => ''])
<p {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</p>