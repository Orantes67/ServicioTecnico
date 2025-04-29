@props(['text'=>'Default_text'])


<div>
    <x-atoms.button {{ $attributes }}>
        <x-atoms.icons.icon_user />
    </x-atoms.button>
    <div>
        <x-atoms.paragraphs {{ $paragraphAttributes ?? '' }}>
            {{ $slot }}
        </x-atoms.paragraphs>
        <x-atoms.paragraphs {{ $paragraphAttributes ?? '' }}>
            {{ $slot }}
        </x-atoms.paragraphs>
    </div>
    <x-atoms.button {{ $attributes }}>
        <x-atoms.icons.icon_logOut />
    </x-atoms.button>
</div>