<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ver Contactos</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>

        body { font-family: 'Nunito', sans-serif; }
        
    </style>
</head>
<body class="antialiased">
    <div class="container">
        <div class="card mt-5">
            <h3 class="card-header">Detalles de Entrada</h3>
            <div class="card-body">
                <h5>Código: {{ $entrada->codigo }}</h5>
                <p>Nombre: {{ $entrada->nombre }} {{ $entrada->apellido }}</p>
                <p>Correo: {{ $entrada->correo }}</p>
                <p>Teléfono: {{ $entrada->telefono }}</p>

                <!-- Aquí va la lista de contactos asociados a la entrada -->
                <h4>Lista de Contactos</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí puedes iterar sobre los contactos asociados y mostrarlos -->
                        <tr>
                            <td>1</td>
                            <td>Nombre Contacto</td>
                            <td>Apellido Contacto</td>
                            <td>9999</td>
                            <td>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('directorio.index') }}" class="btn btn-info">Regresar</a>
            </div>
        </div>
    </div>
</body>
</html>
