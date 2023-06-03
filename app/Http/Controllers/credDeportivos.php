<?php

namespace App\Http\Controllers;

use App\Models\credDeportivo;
use Illuminate\Http\Request;

class credDeportivos extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $titulo = "Creditos deportivos";
        $items = credDeportivo::all();
        //credDeportivos::tomarValores($nombre, $paterno, $materno, $noDeControl);
        return view('/modules/admin/estudiantes/creditosDeportivos', compact('titulo', 'items'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nombre,$paterno,$materno)
    {
        $titulo = "Registro de codigo deportivo";
        
        
        return view('/modules/admin/estudiantes/nuevoCredDeportivo', compact('titulo', 'nombre'));
    }
    public function almacenar(){
        $titulo = 'Almacenando creditos deportivos';
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
