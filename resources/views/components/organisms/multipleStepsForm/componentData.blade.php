@props(['text' => 'Default_text'])

<div>
    <x-atoms.headingOne>Datos del equipo</x-atoms.headingOne>
    <x-atoms.paragraphs>Ingresa los datos del Equipo</x-atoms.paragraphs>

    <x-molecules.molecules_inputField
        type="text"
        text="Nombre"
        name="name"
        id="name"
        placeholder="ingrese el nombre del equipo"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="text"
        text="Marca"
        name="brand"
        id="brand"
        placeholder="ingresa la marca del equipo"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="text"
        text="Modelo"
        name="model"
        id="model"
        placeholder="ingresa el modelo del equipo"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="text"
        text="Número de serie"
        name="serial_number"
        id="serial_number"
        placeholder="ingresa el número de serie del equipo"
    ></x-molecules.molecules_inputField>

    <div>
        <x-atoms.button>Continuar</x-atoms.button>
    </div>
</div>