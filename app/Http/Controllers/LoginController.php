<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Estudante;
use App\Docente;

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


          echo "".$slug;

        }

    public function logout($value='')
    {
      Sentinel::logout();
      return redirect('/login');
    }
}
