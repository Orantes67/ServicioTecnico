@props(['text'=>'Default_text'])


<div class="flex items-center gap-x-4 w-full">
    <x-atoms.button {{ $attributes }}>
        <x-atoms.icons.icon_user />
    </x-atoms.button>
    <div>
        <x-atoms.paragraphs >
            {{ $text }}
        </x-atoms.paragraphs>
        <x-atoms.paragraphs>
            {{ $text }}
        </x-atoms.paragraphs>
    </div>
    <x-atoms.button {{ $attributes }}>
        <x-atoms.icons.icon_logOut />
    </x-atoms.button>
</div>