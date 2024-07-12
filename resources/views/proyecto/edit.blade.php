<form action="{{ route('proyecto.update', $proyecto) }}" method="POST">
    @csrf
    @method('put')

    <label>
        Descripción:
        <br>
        <input name="descripcion" type="text" value="{{ old('descripcion', $proyecto->descripcion) }}">
    </label>
    <br>

    <label>
        Fecha de Inicio:
        <br>
        <input name="fechainicio" type="date" value="{{ old('fechainicio', $proyecto->fechainicio) }}">
    </label>
    <br>

    <label>
        Fecha de Fin:
        <br>
        <input name="fechafin" type="date" value="{{ old('fechafin', $proyecto->fechafin) }}">
    </label>
    <br>

    <label>
        Cuantía:
        <br>
        <input name="cuantia" type="number" step="0.01" value="{{ old('cuantia', $proyecto->cuantia) }}">
    </label>
    <br>

    <button type="submit">Actualizar</button>
</form>
