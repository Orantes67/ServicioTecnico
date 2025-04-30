@props(['text' => 'Default_text'])

<div>
    <x-atoms.icons.icon_close></x-atoms.icons.icon_close>
    <x-atoms.headingOne>Bienvenido</x-atoms.headingOne>
    <x-atoms.paragraphs>Inserta tu correo y contraseña para el acceder</x-atoms.paragraphs>

    <x-molecules.molecules_inputField 
        type="email" 
        text="Email" 
        name="email" 
        id="email" 
        placeholder="ingresa tu correo"
    />
    <x-molecules.molecules_inputField 
        type="password" 
        text="Contraseña" 
        name="password" 
        id="password" 
        placeholder="ingresa tu contraseña"
    />
    <a>
     
        <x-atoms.paragraphs>Olvidaste tu contraseña</x-atoms.paragraphs>
    </a>
    <div>
        <x-atoms.button>Inicia sesion</x-atoms.button>
        <a>no tienes una cuenta registrate</a>
    </div>
</div>