@proops(['text' => 'Default_text'])

<div>
    <x-atoms.headingOne>Datos del servicio</x-atoms.headingOne>
    <x-atoms.paragraphs>Ingresa los datos del Servicio</x-atoms.paragraphs>

    <x-molecules.molecules_inputField
        type="select"
        text="Tipo de servicio"
        name="service_type"
        id="service_type"
        placeholder="Selecciona el tipo"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="text"
        text="Falla"
        name="failure"
        id="failure"
        placeholder="ingresa la falla del equipo"
    ></x-molecules.molecules_inputField>


    <x-molecules.molecules_inputField
        type="text"
        text="Condiciones"
        name="conditions"
        id="conditions"
        placeholder="ingresa las condiciones del equipo"
    ></x-molecules.molecules_inputField>


    <x-molecules.molecules_inputField
        type="select"
        text="Recibio"
        name="recived"
        id="recived"
        placeholder="selecciona quien recibio el equipo"
    ></x-molecules.molecules_inputField>

    <div>
        <x-atoms.button>Continuar</x-atoms.button>
    </div>
</div>