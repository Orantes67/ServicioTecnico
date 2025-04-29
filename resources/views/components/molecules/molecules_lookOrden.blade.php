@props(['text'=>'Default_text'])

<div>
    <x-atoms.icons.icon_lookOrder />
    <x-atoms.button {{ $attributes }}>
        {{ $text }} 
    </x-atoms.button>
</div>