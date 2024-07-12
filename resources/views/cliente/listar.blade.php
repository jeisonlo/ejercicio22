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

    <h1>Lista de clientes</h1>

    @foreach ($cli as $equipo)
    <tr>
        <td>{{ $equipo->telefono }}</td>
        <td>{{ $equipo->domicilio }}</td>
        <td>{{ $equipo->numsocial }}</td>
        
        <td><a href="{{ route('cliente.show', $equipo->id) }}">Detalle</a></td>
        <td><a href="{{ route('cliente.edit', $equipo->id) }}">Editar</a></td>
        <form action="{{ route('cliente.destroy', $equipo->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
        </form>
    </tr>
    @endforeach
   
</body>
</html>