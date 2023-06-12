<?php

namespace App\Http\Controllers;

use App\Models\credCultural;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class credCulturales extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = "Creditos culturales";
        $items = credCultural::all();
        return view('/modules/admin/estudiantes/culturales/creditosCulturales', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Registro de credito cultural";
        $items = Estudiante::all();
        return view('/modules/admin/estudiantes/culturales/nuevoCredCultural', compact('titulo', 'items'));
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
        $item = new credCultural();
        $item->carpetaOficina = $request->oficina;
        $item->estudiante_id = $request->estudiante;
        $item->fechaRegistro = date('Y-m-d');
        $item->estado = "En tramite";
        $item->save();
        return redirect('/admin/estudiantes/culturales/creditosCulturales');
    }

    public function vistaMoocCultural($id)
    {
        $titulo = "Anadir MOOC";
        $items = credCultural::find($id);
        return view('/modules/admin/estudiantes/culturales/nuevoMoocCulturales', compact('titulo', 'items'));
    }

    public function editarMoocCultural(Request $request, $id)
    {
        $item = credCultural::find($id);
        if ($request->hasFile("mooc")) {
            $file = $request->file("mooc");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("culturales/mooc/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->mooc = $nombre;
                $item->save();
                return redirect('/admin/estudiantes/culturales/creditosCulturales');
            }
        } else {
            return back();
        }
    }

    public function vistaEvidencia($id)
    {
        $titulo = "Anadir evidencia";
        $items = credCultural::find($id);
        return view('/modules/admin/estudiantes/culturales/nuevaEvidenciaCulturales', compact('titulo', 'items'));
    }

    public function editarEvidencia(Request $request, $id)
    {
        $item = credCultural::find($id);
        if ($request->hasFile("evidencia")) {
            $file = $request->file("evidencia");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("culturales/evidencia/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->nombreArchivo = $nombre;
                $item->save();
                return redirect('/admin/estudiantes/culturales/creditosCulturales');
            }
        }else{
            return back();
        }
    }


    public function show($id)
    {
        $titulo = "Eliminar MOOC";
        $item = credCultural::find($id);
        return view('/modules/admin/estudiantes/culturales/eliminarMoocCulturales', compact('titulo','item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarMooc($id)
    {
        $item = credCultural::find($id);
        unlink(public_path('culturales/mooc/'.$item->mooc));
        $item->mooc='';
        $item->save();
        return redirect('/admin/estudiantes/culturales/creditosCulturales');
    }

    public function showEvidencia($id)
    {
        $titulo = "Eliminar evidencia";
        $item = credCultural::find($id);
        return view('/modules/admin/estudiantes/culturales/eliminarEvidenciaCulturales', compact('titulo','item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarEvidencia($id)
    {
        $item = credCultural::find($id);
        unlink(public_path('culturales/evidencia/'.$item->nombreArchivo));
        $item->nombreArchivo='';
        $item->save();
        return redirect('/admin/estudiantes/culturales/creditosCulturales');
    }

    public function showRegistro($id){
        $titulo = "Eliminar registro";
        $items = credCultural::find($id);
        return view("modules/admin/estudiantes/culturales/eliminarRegistro", compact('titulo','items'));
    }

    public function destroy($id){
        $item = credCultural::find($id);

        if ($item->mooc == '' && $item->nombreArchivo == '') {
            $item->delete();
            return redirect('/admin/estudiantes/culturales/creditosCulturales');
        }else if($item->mooc != '' && $item->nombreArchivo == ''){
            unlink(public_path('culturales/mooc/'.$item->mooc));
            $item->delete();
            return redirect('/admin/estudiantes/culturales/creditosCulturales');
        }else if($item->mooc == '' && $item->nombreArchivo != ''){
            unlink(public_path('culturales/evidencia/'.$item->nombreArchivo));
            $item->delete();
            return redirect('/admin/estudiantes/culturales/creditosCulturales');
        }else{
            unlink(public_path('culturales/mooc/'.$item->mooc));
            unlink(public_path('culturales/evidencia/'.$item->nombreArchivo));
            unlink(public_path('culturales/liberaciones/'.$item->liberacion));
            $item->delete();
            return redirect('/admin/estudiantes/culturales/creditosCulturales');
        }
       
    }

    public function liberacion($id){
        $titulo = "Liberacion";
        $items = credCultural::find($id);
        return view('/modules/admin/estudiantes/culturales/liberacion', compact('titulo', 'items'));
    }

    public function actualizarLiberacion(Request $request, $id)
    {
        $item = credCultural::find($id);
        if ($request->hasFile("liberacion")) {
            $file = $request->file("liberacion");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("culturales/liberaciones/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->liberacion = $nombre;
                $item->estado = "Liberado";
                $item->save();
                return redirect('/admin/estudiantes/culturales/creditosCulturales');
            }
        } else {
            return back();
        }
    }
}
