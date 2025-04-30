@props(['text' => 'Default_text'])

<div>
    <x-atoms.headingOne>Facturacion</x-atoms.headingOne>
    <x-atoms.paragraphs>Ingresa los datos de pago</x-atoms.paragraphs>
    <div>
        <x-atoms.label>Precio</x-atoms.label>
        <x-atoms.paragraphs>Precio total: ${{ $totalPrice }}</x-atoms.paragraphs>

    </div>
    <div>
        <x-molecules.molecules_inputField
            type="number"
            text="Anticipo"
            name="anticipo"
            id="anticipo"
            placeholder="ingresa el anticipo"
        ></x-molecules.molecules_inputField>
    </div>

    <div>
        <x-atoms.label>Restante</x-atoms.label>
        <x-atoms.paragraphs>Restante total: ${{ $totalPrice }}</x-atoms.paragraphs>
    </div>
</div>