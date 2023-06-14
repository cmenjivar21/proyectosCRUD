@extends('layout.plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Proyectos Ministerio de Cultura</h5>
    <div class="card-body">
        <div class="row align-items-center justify-content-center">
            <div class="col-1">
                <i class="fas fa-folder-plus"></i>
            </div>
            <div class="col-4">
                <h5 class="card-title ">Agregar Proyectos</h5>
            </div>
        </div>
        <p class="card-text">
            <hr>

            <div class="table table-responsive">

                <form action="{{ route('projects.store') }}" method="POST" >
                    @csrf
                    <div class="form-group">
                        <label for="name_project">Nombre del Proyecto</label>
                        <input type="text" name="name_project" id="name_project" class="form-control" required>
                        <label for="fund_source">Fuente de Financiamiento</label>
                        <input type="text" name="fund_source" id="fund_source" class="form-control" required>
                        <label for="planning_amount">Monto de Planificación</label>
                        <input type="number" name="planning_amount" id="planning_amount" class="form-control" required>
                        <label for="sponsored_amount">Monto Patrocinado</label>
                        <input type="number" name="sponsored_amount" id="sponsored_amount" class="form-control" required>
                        <label for="own_fund_amount">Monto propio</label>
                        <input type="number" name="own_fund_amount" id="own_fund_amount" class="form-control" required>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-info">Regresar</a>
                </form>
            </div>
        </p>

    </div>
</div>


@endsection
