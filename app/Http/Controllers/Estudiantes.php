<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class Estudiantes extends Controller
{
    public function __construct(){
        $this->middleware(['auth'])->only(['index']);
    }

    public function index()
    {
        $titulo = "Estudiantes registrados";
        $items = Estudiante::all();
        return view('modules/admin/estudiantes/estudiantesRegistrados', compact('titulo', 'items'));

    }

    public function create(){
        $titulo = "Nuevo estudiante";
        return view('modules/admin/estudiantes/nuevoEstudiante', compact('titulo'));
    }

    public function store(Request $request)
    {   
        $item = new Estudiante();
        $item->nombre = $request->nombre;
        $item->paterno = $request->paterno;
        $item->materno = $request->materno;
        $item->noDeControl = $request->noDeControl;
        $item->telefono = $request->telefono;
        $item->carrera = $request->carrera;
        $item->fechaNacimiento = $request->fechaNacimiento;
        $item->preparatoria = $request->preparatoria;
        $item->ingresoITMA2 = $request->ingresoITMA2;
        $item->deportivos = 'En tramite';
        $item->hrsDeportivos = 0;
        $item->civicos = 'En tramite';
        $item->hrsCivicos = 0;
        $item->culturales = 'En tramite';
        $item->hrsCulturales = 0;
        $item->save();
        return redirect('/admin/estudiantes/estudiantesRegistrados');
    }
}
