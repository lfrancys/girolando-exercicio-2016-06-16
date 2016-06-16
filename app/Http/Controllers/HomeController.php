<?php

namespace Segundo\Http\Controllers;

use Illuminate\Http\Request;

use Segundo\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {

        if(\Auth::check())
            return Redirect::to('dashboard')->with('flash_notice', 'Usuario está logado!');

        return view('login');
    }

}
