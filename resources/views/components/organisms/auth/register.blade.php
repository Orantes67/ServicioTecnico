@props(['text' => 'Default_text'])

<div>
    <x-atoms.icons.icon_close></x-atoms.icons.icon_close>
    <x-atoms.headingOne>Registrate</x-atoms.headingOne>
    <x-atoms.paragraphs>Llena la siguiente información</x-atoms.paragraphs>

    <x-molecules.molecules_inputField 
        type="text" 
        text="Nombre completo" 
        name="name" 
        id="name" 
        placeholder="ingresa tu nombre"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField 
        type="date"
        text="Fecha de nacimiento"
        name="birthdate"
        id="birthdate"
        placeholder="ingresa tu fecha de nacimiento"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="password"
        text="Crea una contraseña"
        name="password"
        id="password"
        placeholder="ingresa tu contraseña"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="email"
        text="Email "
        id="email"
        placeholder="ingresa tu correo"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="tel"
        text="Teléfono"
        name="phone"
        id="phone"
        placeholder="ingresa tu teléfono"
    ></x-molecules.molecules_inputField>

    <x-molecules.molecules_inputField
        type="password"
        text="Confirma tu contraseña"
        name="password_confirmation"
        id="password_confirmation"
        placeholder="confirma tu contraseña"
    ></x-molecules.molecules_inputField>

    <div>
        <x-atoms.button>Registrate</x-atoms.button>
        <a>ya tienes una cuenta inicia sesion</a>
    </div>
</div>