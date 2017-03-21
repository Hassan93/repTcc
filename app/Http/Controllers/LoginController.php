<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Estudante;
use App\Docente;
use App\Curso;
use App\Area;
use Session;

class LoginController extends Controller
{
    public function login()
    {
      return view('auth.login');
    }
    public function postLogin(Request $request)
    {
      Sentinel::authenticate($request->all());
      $slug = Sentinel::getUser()->roles()->first()->slug;

      if ($slug=='admin') {

          Session::flash('success', 'Administrador autenticado com sucesso!');
          return redirect(route('monografias.index'));

      }elseif ($slug=='faculdade') {

           Session::flash('success', 'Autenticado com sucesso!');

        return redirect(url('/faculdade/'.$slug = Sentinel::getUser()->faculdade));
      }

      
    }

    public function logout($value='')
    {
      Sentinel::logout();
      return redirect('/');
    }
}
