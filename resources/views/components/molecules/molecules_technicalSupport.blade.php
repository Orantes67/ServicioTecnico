@props(['text'=>'Default_text'])

<div>
    <x-atoms.icons.icon_technicalSupport />
    <x-atoms.button {{ $attributes }}>
        {{ $text }} 
    </x-atoms.button>
</div>