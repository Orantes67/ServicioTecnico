@props(['text' => 'Default_text'])

<div>
    <x-atoms.icons.icon_close></x-atoms.icons.icon_close>
    <x-atoms.headingOne>Verificacion de codigo</x-atoms.headingOne>
    <x-atoms.paragraphs>Ingresa tu codigo que se encuentra en tu correo</x-atoms.paragraphs>

    <x-molecules.molecules_inputField
        type="text"
        text="Codigo de verificacion"
        name="verification_code"
        id="verification_code"
        placeholder="ingresa tu codigo de verificacion"
    ></x-molecules.molecules_inputField>

    <div>
        <x-atoms.button>Continuar</x-atoms.button>
    </div>
</div>