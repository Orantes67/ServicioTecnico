@props(['text'=>'Default_text'])

<div class="flex flex-nowrap">
    <x-atoms.icons.icon_technicalSupport />
    <x-atoms.button {{ $attributes }}>
        {{ $text }} 
    </x-atoms.button>
</div>