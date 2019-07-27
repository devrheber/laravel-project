<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Lista de Libros</h1>
                    <table class="table">
                        <thead>
                            <th>Titulo</th>
                            <th>Resumen</th>
                            <th>Fecha de Creación</th>
                        </thead>
                        <tbody>
                            @foreach ($libros as $l)
                                <tr>
                                    <td>{{ $l->titulo }}</td>
                                    <td>{{ $l->resumen }}</td>
                                    <td>{{ $l->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                            
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
