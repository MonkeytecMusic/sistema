<?php

namespace App\Http\Controllers;

use App\Models\credCivico;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class credCivicos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

     public function __construct(){
        $this->middleware(['auth'])->only(['index','create','store', 'vistaMoocCivico',
        'editarMoocCivico', 'vistaEvidencia', 'editarEvidencia', 'show', 'eliminarMooc',
        'showEvidencia', 'eliminarEvidencia', 'showRegistro', 'destroy']);
    }
    public function index()
    {
        $titulo = "Creditos civicos";
        $items = credCivico::all();
        return view('/modules/admin/estudiantes/civicos/creditosCivicos', compact('titulo', 'items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = "Registro de credito civico";
        $items = Estudiante::all();
        return view('/modules/admin/estudiantes/civicos/nuevoCredCivico', compact('titulo', 'items'));
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
        $item = new credCivico();
        $item->carpetaOficina = $request->oficina;
        $item->estudiante_id = $request->estudiante;
        $item->fechaRegistro = date('Y-m-d');
        $item->estado = "En tramite";
        $item->save();
        return redirect('/admin/estudiantes/civicos/creditosCivicos');
    }

    public function vistaMoocCivico($id)
    {
        $titulo = "Anadir MOOC";
        $items = credCivico::find($id);
        return view('/modules/admin/estudiantes/civicos/nuevoMoocCivico', compact('titulo', 'items'));
    }

    public function editarMoocCivico(Request $request, $id)
    {
        $item = credCivico::find($id);
        if ($request->hasFile("mooc")) {
            $file = $request->file("mooc");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("civicos/mooc/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->mooc = $nombre;
                $item->save();
                return redirect('/admin/estudiantes/civicos/creditosCivicos');
            }
        } else {
            return back();
        }
    }

    public function vistaEvidencia($id)
    {
        $titulo = "Anadir evidencia";
        $items = credCivico::find($id);
        return view('/modules/admin/estudiantes/civicos/nuevaEvidenciaCivicos', compact('titulo', 'items'));
    }

    public function editarEvidencia(Request $request, $id)
    {
        $item = credCivico::find($id);
        if ($request->hasFile("evidencia")) {
            $file = $request->file("evidencia");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("civicos/evidencia/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->nombreArchivo = $nombre;
                $item->save();
                return redirect('/admin/estudiantes/civicos/creditosCivicos');
            }
        }else{
            return back();
        }
    }

    public function show($id)
    {
        $titulo = "Eliminar MOOC";
        $item = credCivico::find($id);
        return view('/modules/admin/estudiantes/civicos/eliminarMoocCivicos', compact('titulo','item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarMooc($id)
    {
        $item = credCivico::find($id);
        unlink(public_path('civicos/mooc/'.$item->mooc));
        $item->mooc='';
        $item->save();
        return redirect('/admin/estudiantes/civicos/creditosCivicos');
    }

    public function showEvidencia($id)
    {
        $titulo = "Eliminar evidencia";
        $item = credCivico::find($id);
        return view('/modules/admin/estudiantes/civicos/eliminarEvidenciaCivicos', compact('titulo','item'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminarEvidencia($id)
    {
        $item = credCivico::find($id);
        unlink(public_path('civicos/evidencia/'.$item->nombreArchivo));
        $item->nombreArchivo='';
        $item->save();
        return redirect('/admin/estudiantes/civicos/creditosCivicos');
    }

    public function showRegistro($id){
        $titulo = "Eliminar registro";
        $items = credCivico::find($id);
        return view("modules/admin/estudiantes/civicos/eliminarRegistro", compact('titulo','items'));
    }

    public function destroy($id){
        $item = credCivico::find($id);

        if ($item->mooc == '' && $item->nombreArchivo == '') {
            $item->delete();
            return redirect('/admin/estudiantes/civicos/creditosCivicos');
        }else if($item->mooc != '' && $item->nombreArchivo == ''){
            unlink(public_path('civicos/mooc/'.$item->mooc));
            $item->delete();
            return redirect('/admin/estudiantes/civicos/creditosCivicos');
        }else if($item->mooc == '' && $item->nombreArchivo != ''){
            unlink(public_path('civicos/evidencia/'.$item->nombreArchivo));
            $item->delete();
            return redirect('/admin/estudiantes/civicos/creditosCivicos');
        }else{
            unlink(public_path('civicos/mooc/'.$item->mooc));
            unlink(public_path('civicos/evidencia/'.$item->nombreArchivo));
            unlink(public_path('civicos/liberaciones/'.$item->liberacion));
            $item->delete();
            return redirect('/admin/estudiantes/civicos/creditosCivicos');
        }
       
    }

    public function liberacion($id){
        $titulo = "Liberacion";
        $items = credCivico::find($id);
        return view('/modules/admin/estudiantes/civicos/liberacion', compact('titulo', 'items'));
    }

    public function actualizarLiberacion(Request $request, $id)
    {
        $item = credCivico::find($id);
        if ($request->hasFile("liberacion")) {
            $file = $request->file("liberacion");
            $nombre = $request->nombreArchivo . "." . $file->guessExtension();
            $ruta = public_path("civicos/liberaciones/" . $nombre);
            if ($file->guessExtension() == "pdf") {
                copy($file, $ruta);
                $item->liberacion = $nombre;
                $item->estado = "Liberado";
                $item->save();
                return redirect('/admin/estudiantes/civicos/creditosCivicos');
            }
        } else {
            return back();
        }
    }
}
