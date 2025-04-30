@props([
    'text' => 'Default_text',
    'type' => 'text',
    'name' => 'Default_name',
    'id' => 'Default_id',
    'placeholder' => 'Default_placeholder'
])

<div>
    <x-atoms.label>{{ $text }}</x-atoms.label>
    <div>
        <x-atoms.inputs 
            type="{{ $type }}" 
            id="{{ $id }}" 
            name="{{ $name }}" 
            placeholder="{{ $placeholder }}"
        />
    </div>
</div>