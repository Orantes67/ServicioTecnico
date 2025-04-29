@props(['text'=>'Default_text'])

<div>
    <x-atoms.img.logo_cybacRecord />
    <x-atoms.paragraphs {{ $paragraphAttributes ?? '' }} >
        {{ $text }}
    </x-atoms.paragraphs>

</div>