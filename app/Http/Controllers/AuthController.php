<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index(){
        if (Auth::check()) {
            return redirect()->route('admin_index');
        }
        return view('modules.auth.login');
    }
    public function logear(Request $request){
        $credenciales = $request->only("name", "email", "user", "password");
        if (Auth::attempt($credenciales)) {
            if (auth()->user()->rol == 'admin') {
                return redirect()->route('admin_index');
            } else if (auth()->user()->rol == 'cliente') {
                return redirect()->route('cliente_index');
            } else {
                return $this->logout();
            }
        } else {
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }

    public function agregarNuevo(){
        $item = new User();
        $item->name = 'cristian';
        $item->paterno = 'caballero';
        $item->materno = 'mejia';
        $item->email = 'cristian@milpaalta2.tecnm.mx';
        $item->user = 'admin';
        $item-> passwordOriginal = '12345';
        $item->password = Hash::make('12345');
        $item->rol = 'admin';
        $item->save();
        return $item;
    }
}
