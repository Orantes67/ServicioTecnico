@props(['text' => 'Default_text'])

<div>
    <x-atoms.icons.icon_close></x-atoms.icons.icon_close>
    <x-atoms.headingOne>Contraseña nueva</x-atoms.headingOne>
    <x-atoms.paragraphs>Ingresa tu nueva contraseña</x-atoms.paragraphs>

    <x-molecules.molecules_inputField
        type="password"
        text="Contraseña"
        name="nueva contraseña"
        id="new_password"
        placeholder="ingresa tu nueva contraseña"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="password"
        text="Confirmar contraseña"
        name="confirmar contraseña"
        id="confirm_password"
        placeholder="ingresa tu nueva contraseña"
        ></x-molecules.molecules_inputField>
    <div>
        <x-atoms.button>Continuar</x-atoms.button>
    </div>
</div>