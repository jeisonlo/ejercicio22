<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de clientes</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de proyectos</h1>

    @foreach ($pro as $proyecto)
    <tr>
        <td>{{ $proyecto->descripcion }}</td>
        <td>{{ $proyecto->fechainicio }}</td>
        <td>{{ $proyecto->fechafin}}</td>
        <td>{{ $proyecto->cuantia}}</td>
        
        
        <td><a href="{{ route('proyecto.show', $proyecto->id) }}">Detalle</a></td>
        <td><a href="{{ route('proyecto.edit', $proyecto->id) }}">Editar</a></td>
        <form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    </tr>
    @endforeach
   
</body>
</html>