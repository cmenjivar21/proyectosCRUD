@extends('layout.plantilla')

@section("tituloPagina", "Actualiza un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Proyectos Ministerio de Cultura</h5>
    <div class="card-body">
        <div class="row align-items-center justify-content-center">
            <div class="col-1">
                <i class="far fa-edit"></i>
            </div>
            <div class="col-4">
                <h5 class="card-title ">Editar Proyecto</h5>
            </div>
        </div>
        <p class="card-text">
            <hr>

                <form action="{{ route('projects.update', $project->id) }}" method="POST" >
                    @csrf
                    @method("PUT")

                        <label for="name_project">Nombre del Proyecto</label>
                        <input type="text" name="name_project" id="name_project" class="form-control" required value="{{ $project->name_project }}">
                        <label for="fund_source">Fuente de Financiamiento</label>
                        <input type="text" name="fund_source" id="fund_source" class="form-control" required value="{{ $project->fund_source }}">
                        <label for="planning_amount">Monto de Planificación</label>
                        <input type="number" name="planning_amount" id="planning_amount" class="form-control" required value="{{ $project->planning_amount }}">
                        <label for="sponsored_amount">Monto Patrocinado</label>
                        <input type="number" name="sponsored_amount" id="sponsored_amount" class="form-control" required value="{{ $project->sponsored_amount }}">
                        <label for="own_fund_amount">Monto propio</label>
                        <input type="number" name="own_fund_amount" id="own_fund_amount" class="form-control" required value="{{ $project->own_fund_amount }}">


                    <br>
                    <button type="submit" class="btn btn-warning">Actualizar</button>
                    <a href="{{ route('projects.index') }}" class="btn btn-info">Regresar</a>
                </form>

        </p>

    </div>
</div>



@endsection
