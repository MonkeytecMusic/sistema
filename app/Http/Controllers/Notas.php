<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Nota;
use Illuminate\Http\Request;

class Notas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $titulo = "Notas";
        $items = Nota::all();
        return view('/modules/admin/notas/notas', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Nueva nota";
        $items = Estudiante::all();
        return view('modules/admin/notas/nuevaNota', compact('titulo','items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Nota();
        $item->horas = $request->horas;
        $item->evento = $request->evento;
        $item->noDeControl = $request->estudiante;
        $item->save();
        return redirect('/admin/notas/notas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $titulo = "Eliminar nota";
        $item = Nota::find($id);
        return view('modules/admin/notas/eliminarNota',compact('titulo','item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titulo = "Editar nota";
        $items = Nota::find($id);
        $estudiantes = Estudiante::all();
        return view('modules/admin/notas/actualizarNota',compact('titulo','items','estudiantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateNota(Request $request, $id)
    {
        $item = Nota::find($id);
        $item->horas = $request->horas;
        $item->evento = $request->evento;
        $item->noDeControl = $request->estudiante;
        $item->save();
        return redirect('/admin/notas/notas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Nota::find($id);
        $item->delete();
        return redirect('/admin/notas/notas');
    }
}
