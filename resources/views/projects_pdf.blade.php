    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

            <!-- Bootstrap CSS -->
        <link href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">

        <title>Listado de Proyectos</title>
    </head>
    <body>
        <div class="col-sm-5 col-md-9">
                <h2 class="text-center">Gobierno de El Salvador</h2>
            <div class="row justify-content-center">
                <h3>Ministerio de Cultura</h3>
                <h3>Listado de Proyectos</h3>
            </div>
        </div>
          <hr>
          <br>
        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Proyecto</th>
                    <th>Fuente de Financiamiento</th>
                    <th>Monto de Planificación</th>
                    <th>Monto Patrocinado</th>
                    <th>Monto de Fondos Propios</th>
                    <th>Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>

                 @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name_project }}</td>
                        <td>{{ $project->fund_source }}</td>
                        <td>{{ $project->planning_amount }}</td>
                        <td>{{ $project->sponsored_amount }}</td>
                        <td>{{ $project->own_fund_amount }}</td>
                        <td>{{ $project->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <p>Fecha de emisión:{{$currentDate}}</p>
        </div>

    </body>
    </html>


