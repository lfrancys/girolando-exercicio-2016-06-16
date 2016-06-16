<?php

namespace Segundo\Http\Controllers\Autenticacao;

use Illuminate\Http\Request;

use Segundo\Http\Requests;
use Segundo\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index(){
            //return ' estou na dash';

        //$usuario =  \Auth::check();

        //dd('kdjfksd = '.$usuario);
        //dd(\Auth::user());

        return view('dashboard')->with('usuario', \Auth::user());
    }
}
