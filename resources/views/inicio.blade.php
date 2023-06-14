@extends('layout.plantilla')

@section('tituloPagina', 'CRUD de Proyectos')

@section('contenido')

    <div class="card">
        <h5 class="card-header">Proyectos Ministerio de Cultura</h5>
        <div class="card-body">
            <div class="row align-items-center justify-content-center">
                <div class="col-1">
                    <i class="fas fa-window-restore"></i>
                </div>
                <div class="col-4">
                    <h5 class="card-title ">Listado de Proyectos</h5>
                </div>

                <div class="col-sm-12">
                    @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">{{ $mensaje }}</div>
                    @endif
                </div>

            </div>
            <p class="card-text">
                <div>
                    <a href="{{ route('projects.create')}}" class="btn btn-primary">Agregar Proyecto</a>

                    <a href="{{ route('projects_pdf')}}" class="btn btn-primary">Descargar lista de Proyectos</a>
                </div>

                <hr>

                <div class="table table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre del Proyecto</th>
                            <th>Fuente de Financiamiento</th>
                            <th>Monto de Planificación</th>
                            <th>Monto Patrocinado</th>
                            <th>Monto de Fondos Propios</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                            <th></th>
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
                                <td>
                                    <form action="{{ route("projects.edit", $project->id) }}" method="GET" >
                                        <button type="submit" class="btn btn-sm btn-warning">
                                            <span><i class="far fa-edit"></i>  </span>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route("projects.show", $project->id) }}" method="GET" >
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <span><i class="fas fa-trash-alt"></i></span>
                                        </button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </p>

        </div>
    </div>


@endsection

