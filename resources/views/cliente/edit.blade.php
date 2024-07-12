<form action="{{ route('cliente.update', $cliente) }}" method="POST">
    @csrf
    @method('put')

    <label>
        Teléfono:
        <br>
        <input name="telefono" type="text" value="{{ old('telefono', $cliente->telefono) }}">
    </label>
    <br>

    <label>
        Domicilio:
        <br>
        <input name="domicilio" type="text" value="{{ old('domicilio', $cliente->domicilio) }}">
    </label>
    <br>

    <label>
        Número Social:
        <br>
        <input name="numsocial" type="text" value="{{ old('numsocial', $cliente->numsocial) }}">
    </label>
    <br>

    <button type="submit">Actualizar</button>
</form>