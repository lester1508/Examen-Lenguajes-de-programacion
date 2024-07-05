
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crear Nueva Entrada Directorio</title>

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
                <h3 class="card-header">Crear Nueva Entrada Directorio</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('directorio.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="codigoEntrada">Código de Entrada</label>
                            <input type="text" name="codigoEntrada" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" name="apellido" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="email" name="correo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="#" class="btn btn-info">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
