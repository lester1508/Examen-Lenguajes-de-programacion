
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Buscar Entrada</title>

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
                <h3 class="card-header">Buscar Entrada</h3>
                <div class="card-body">
                    <form method="GET" action="{{ route('directorio.buscar') }}">
                        @csrf
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input type="text" name="correo" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Buscar</button>
                        <a href="#" class="btn btn-info">Regresar</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
