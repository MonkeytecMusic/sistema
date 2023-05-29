<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Admins extends Controller
{
    public function __construct(){
        $this->middleware(['auth'])->only(['index', 'registroUsuario', 'edit', 'update', 'show', 'destroy', 'create', 'store']);
    }
    public function index()
    {
        $titulo = "Inicio";
        return view('modules/admin/index', compact('titulo'));

    }

    public function registroUsuario(){
        $titulo = "Registro de usuarios";
        $items = User::all();
        return view('modules/admin/registroUsuario', compact('titulo','items'));
    }



    public function edit($id){
        $titulo = "Editar usuario";
        $items = User::find($id);
        return view('modules/admin/actualizarUsuario',compact('titulo','items'));
    }
    public function update(Request $request, $id){
        $item = User::find($id);
        $item->name = $request->name;
        $item->paterno = $request->paterno;
        $item->materno = $request->materno;
        $item->email = $request->email;
        $item->user = $request->user;
        $item->passwordOriginal = $request->password;
        $item->password = Hash::make($request->password) ;
        $item->save();
        return redirect('/admin/registroUsuario');
    }

    public function show($id){
        $titulo = "Eliminar usuario";
        $items = User::find($id);
        return view("modules/admin/eliminarUsuario", compact('titulo','items'));
    }

    public function destroy($id){
        $item = User::find($id);
        $item->delete();
        return redirect('/admin/registroUsuario');
    }

    public function create(){
        $titulo = "Nuevo usuario";
        return view('modules/admin/nuevoUsuario', compact('titulo'));
    }

    public function store(Request $request)
    {
        $item = new User();
        $item->name = $request->name;
        $item->paterno = $request->paterno;
        $item->materno = $request->materno;
        $item->email = $request->email;
        $item->user = $request->user;
        $item->passwordOriginal = $request->password;
        $item->password = Hash::make($request->password);
        $item->rol = 'admin';
        $item->save();
        return redirect('/admin/registroUsuario');
    }

}
