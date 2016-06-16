<?php

namespace Segundo\Http\Controllers\Autenticacao;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Segundo\Http\Requests;
use Segundo\Http\Controllers\Controller;

class DashboardController extends Controller
{
    use AuthenticatesUsers;

    public function index(){
            //return ' estou na dash';

        //$usuario =  \Auth::check();

        //dd('kdjfksd = '.$usuario);
        //dd(\Auth::user());

        return view('Autenticacao/dashboard')->with('usuario', \Auth::user());
    }
}
