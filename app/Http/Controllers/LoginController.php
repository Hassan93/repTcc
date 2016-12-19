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

      if ($slug == 'admin')
          return redirect('/admin');
      elseif ($slug == 'studant') {
              $estudantes = Estudante::all();
              foreach ($estudantes as $estudante) {
                //var_dump($estudante->email." ? ".Sentinel::getUser()->email);
                if ($estudante->email == Sentinel::getUser()->email)
                    return redirect('/studant'.'/'.$estudante->id);
                  }
       }elseif ($slug == 'supervisor') {

                $supervisores = Docente::all();
                foreach ($supervisores as $supervisor) {
                        if ($supervisor->email == Sentinel::getUser()->email)

                          return redirect('/supervisor'.'/'.$supervisor->id);

                }
            }
            return redirect('/login');
        }

    public function logout($value='')
    {
      Sentinel::logout();
      return redirect('/login');
    }
}
