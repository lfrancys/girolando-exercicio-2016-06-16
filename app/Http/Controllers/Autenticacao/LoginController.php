<?php

namespace Segundo\Http\Controllers\Autenticacao;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Segundo\Http\Requests;
use Segundo\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index(){

        \Session::flush();
        \Auth::logout();

        return redirect('/');
    }

    public function store(Request $request){

        if(\Auth::attempt(['telefoneUsuario' => $request->telefone, 'password' => $request->senha, 'statusUsuario' => 1])){
            \Session::flush();

            //return Redirect::Guest('dashboard.index');

            if(\Auth::check()){
                return view('Autenticacao/dashboard')->with('usuario', \Auth::user());
            }
            //return \Route::auth();

            //redirect('dashboard');

            //return redirect()->guest('dashboard');
            //return Redirect::intended('dashboard');
            //return redirect(route('dashboard.index'));
        }

        return Redirect::to('/')->with('flash_notice', 'Usuario ou senha inválido!');

    }
}
