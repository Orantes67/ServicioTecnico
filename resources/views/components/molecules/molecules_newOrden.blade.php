@props(['text'=>'Default_text'])


<div class="flex flex-nowrap">
    <x-atoms.icons.icon_order   class="w-8 h-8"/>
    <x-atoms.button {{ $attributes }}>
        {{ $text }} 
    </x-atoms.button>
    
</div>