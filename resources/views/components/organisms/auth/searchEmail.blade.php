@props(['text' => 'Default_text'])

<div>
    <x-atoms.icons.icon_close></x-atoms.icons.icon_close>
    <x-atoms.headingOne>Contraseña nueva</x-atoms.headingOne>
    <x-atoms.paragraphs>Ingresa tu correo para actualizar tu contraseña</x-atoms.paragraphs>

    <x-molecules.molecules_inputField
        type="email"
        text="Email"
        name="email"
        id="email"
        placeholder="ingresa tu correo"
    ></x-molecules.molecules_inputField>

    <div>
        <x-atoms.button>Continuar</x-atoms.button>
        <a>ya tienes una cuenta,inicia sesion</a>
        <a>no tienes una cuenta, registrate</a>
    </div>
</div>