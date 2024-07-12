<form action="{{ route('cliente.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        <br>
        Teléfono:
        <br>
        <input type="text" name="telefono">
    </label>

    <br>
    <label>
        Domicilio:
        <br>
        <input type="text" name="domicilio">
    </label>

    <br>
    <label>
        Número Social:
        <br>
        <input type="text" name="numsocial">
    </label>

    <br>
    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>