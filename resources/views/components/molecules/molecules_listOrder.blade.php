@props(['text'=>'Default_text'])

<div class="flex items-center gap-x-4 w-full">
    <div >
        <x-atoms.icons.icon_listOrder />
    </div>
    <x-atoms.button {{ $attributes }}>
        {{ $text }} 
    </x-atoms.button>
</div>