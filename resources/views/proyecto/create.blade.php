<form action="{{ route('proyecto.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>
        Descripción:
        <br>
        <input type="text" name="descripcion">
    </label>

    <br>
    <label>
        Fecha de Inicio:
        <br>
        <input type="date" name="fechainicio">
    </label>

    <br>
    <label>
        Fecha de Fin:
        <br>
        <input type="date" name="fechafin">
    </label>

    <br>
    <label>
        Cuantía:
        <br>
        <input type="number" step="0.01" name="cuantia">
    </label>

    <br><br>
    <button type="submit">Enviar Formulario</button>
</form>
