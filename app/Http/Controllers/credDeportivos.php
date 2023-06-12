<?php

namespace App\Http\Controllers;

use App\Models\credDeportivo;
use App\Models\Estudiante;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function create()
    {
        $titulo = "Registro de credito deportivo";
        $items = Estudiante::all();
        return view('/modules/admin/estudiantes/nuevoCredDeportivo', compact('titulo', 'items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/Mexico_City');
        $item = new credDeportivo();
        $item->carpetaOficina = $request->oficina;
        $item->estudiante_id = $request->estudiante;
        $item->fechaRegistro = date('Y-m-d');
        $item->estado = "En tramite";
        $item->save();
        return redirect('/admin/estudiantes/creditosDeportivos');
    }
    public function vistaMooc($id)
    {
        $titulo = "Anadir MOOC";
        $items = credDeportivo::find($id);
        return view('/modules/admin/estudiantes/moocDeportivos/nuevoMoocDeportivo', compact('titulo', 'items'));
    }

    public function editarMooc(Request $request, $id)
    {
        $item = credDeportivo::find($id);
        if ($request->hasFile("mooc")) {
            $file = $request->file("mooc");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("deportivos/mooc/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->mooc = $nombre;
                $item->save();
                return redirect('/admin/estudiantes/creditosDeportivos');
            }
        } else {
            return back();
        }
    }


    public function vistaEvidencia($id)
    {
        $titulo = "Anadir evidencia";
        $items = credDeportivo::find($id);
        return view('/modules/admin/estudiantes/evidenciaDeportivos/nuevaEvidenciaDeportivo', compact('titulo', 'items'));
    }
    public static $contador = 0;
    public function editarEvidencia(Request $request, $id)
    {
        $item = credDeportivo::find($id);
        if ($request->hasFile("evidencia")) {
            $file = $request->file("evidencia");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("deportivos/evidencia/". $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->nombreArchivo = $nombre;
                $item->save();
                return redirect('/admin/estudiantes/creditosDeportivos');
            }
        }else{
            return back();
        }
    }

    public function show($id)
    {
        $titulo = "Eliminar MOOC";
        $item = credDeportivo::find($id);
        return view('/modules/admin/estudiantes/eliminarMoocDeportivos', compact('titulo','item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarMooc($id)
    {
        $item = credDeportivo::find($id);
        unlink(public_path('deportivos/mooc/'.$item->mooc));
        $item->mooc='';
        $item->save();
        return redirect('/admin/estudiantes/creditosDeportivos');
    }

    public function showEvidencia($id)
    {
        $titulo = "Eliminar evidencia";
        $item = credDeportivo::find($id);
        return view('/modules/admin/estudiantes/eliminarEvidenciaDeportivos', compact('titulo','item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarEvidencia($id)
    {
        $item = credDeportivo::find($id);
        unlink(public_path('deportivos/evidencia/'.$item->nombreArchivo));
        $item->nombreArchivo='';
        $item->save();
        return redirect('/admin/estudiantes/creditosDeportivos');
    }

    public function showRegistro($id){
        $titulo = "Eliminar registro";
        $items = credDeportivo::find($id);
        return view("modules/admin/estudiantes/eliminarRegistro", compact('titulo','items'));
    }

    public function destroy($id){
        $item = credDeportivo::find($id);

        if ($item->mooc == '' && $item->nombreArchivo == '') {
            $item->delete();
            return redirect('/admin/estudiantes/creditosDeportivos');
        }else if($item->mooc != '' && $item->nombreArchivo == ''){
            unlink(public_path('deportivos/mooc/'.$item->mooc));
            $item->delete();
            return redirect('/admin/estudiantes/creditosDeportivos');
        }else if($item->mooc == '' && $item->nombreArchivo != ''){
            unlink(public_path('deportivos/evidencia/'.$item->nombreArchivo));
            $item->delete();
            return redirect('/admin/estudiantes/creditosDeportivos');
        }else{
            unlink(public_path('deportivos/mooc/'.$item->mooc));
            unlink(public_path('deportivos/evidencia/'.$item->nombreArchivo));
            unlink(public_path('deportivos/liberaciones/'.$item->liberacion));
            $item->delete();
            return redirect('/admin/estudiantes/creditosDeportivos');
        }
       
    }

    public function liberacion($id){
        $titulo = "Liberacion";
        $items = credDeportivo::find($id);
        return view('/modules/admin/estudiantes/liberacion', compact('titulo', 'items'));
    }

    public function actualizarLiberacion(Request $request, $id)
    {
        $item = credDeportivo::find($id);
        if ($request->hasFile("liberacion")) {
            $file = $request->file("liberacion");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("deportivos/liberaciones/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->liberacion = $nombre;
                $item->estado = "Liberado";
                $item->save();
                return redirect('/admin/estudiantes/creditosDeportivos');
            }
        } else {
            return back();
        }
    }
    
}
