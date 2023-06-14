<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pagina de inicio
        $projects = Project::all();
        return view('inicio', compact('projects'));
    }

    public function create()
    {
        // para formulario de agregar datos
        return view('create');
    }

    public function store(Request $request)
    {
        // para guardar en la DB
        $project = new Project();
        $project->name_project = $request->input('name_project');
        $project->fund_source = $request->input('fund_source');
        $project->planning_amount = $request->input('planning_amount');
        $project->sponsored_amount = $request->input('sponsored_amount');
        $project->own_fund_amount = $request->input('own_fund_amount');

        $project->save();

        return redirect()->route("projects.index")->with("success", "Proyecto creado exitosamente.");
    }

    public function show($id)
    {
        // muestra un registro de la tabla
        $project = Project::find($id);
        return view('delete', compact('project'));
    }

    public function edit($id)
    {
        // traer datos por el id y montarlos en un formulario
        $project = Project::find($id);
        return view('edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        // actualiza los datos en la bd
        $project = Project::find($id);
        $project->name_project = $request->input('name_project');
        $project->fund_source = $request->input('fund_source');
        $project->planning_amount = $request->input('planning_amount');
        $project->sponsored_amount = $request->input('sponsored_amount');
        $project->own_fund_amount = $request->input('own_fund_amount');
        $project->save();

        return redirect()->route("projects.index")->with("success", "Proyecto actualizado exitosamente.");
    }

    public function getPDF()
    {
        // para reporte pdf
        $now = Carbon::now();
        $currentDate = $now->format('d-m-Y');
        $projects = Project::all();
        $pdf = PDF::loadView('projects_pdf', compact('projects', 'currentDate'));
        return $pdf->download('reporte.pdf');
    }


    public function destroy($id)
    {
        // eliminar registros
        $project = Project::find($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Proyecto eliminado exitosamente.');
    }
}
