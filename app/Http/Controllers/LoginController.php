<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Estudante;
use App\Docente;
use App\Curso;
use App\Area;

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

          return redirect(route('monografias.index'));

      }elseif ($slug=='faculdade') {

        return redirect(url('/faculdade/'.$slug = Sentinel::getUser()->faculdade_id));
      }

      
    }

    public function logout($value='')
    {
      Sentinel::logout();
      return redirect('/');
    }
}
