<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function faculdade()
    {
      return view('homes.faculdade');
    }
    public function visitante($value='')
    {
      return view('homes.visitante');
    }
    public function admin()
    {
      return view('homes.admin');
    }
    public function estatisticas($value='')
    {
      return view('estatisticas.index');
    }
    public function usuarios($value='')
    {
      return view('usuarios.index');

    }
}
