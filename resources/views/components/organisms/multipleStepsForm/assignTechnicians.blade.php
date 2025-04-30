@props(['text' => 'Default_text'])


<div>
    <x-atoms.headingOne>Asignar</x-atoms.headingOne>
    <x-atoms.paragraphs>Asigna al tecnico</x-atoms.paragraphs>
    <x-molecules.molecules_inputField
        type="select"
        text="Tecnico"
        name="technician"
        id="technician"
        placeholder="Selecciona el tecnico"
    ></x-molecules.molecules_inputField>
    <x-molecules.molecules_inputField
        type="text"
        text="Descripcion"
        name="description"
        id="descripdion"
        placeholder="ingresa la descripcion del tecnico"
    ></x-molecules.molecules_inputField>
</div>