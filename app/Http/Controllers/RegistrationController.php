<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use Sentinel;
use Session;

class RegistrationController extends Controller
{
   public function register()
    {
      $faculdades = Area::all();
      return view('auth.register')->withFaculdades($faculdades);
    }

    public function postRegister(Request $request)
    {
    
      $user= Sentinel::registerAndActivate([
                      'email'      => $request->input('email'),
                      'password'   => $request->input('password'),
                      'permissions'=>  [' '],
                      'last_login' =>  ' ',
                      'first_name' => $request->input('first_name'),
                      'last_name'  => $request->input('last_name'),
                      'faculdade'=>$request->input('faculdade')
                      ]);
            if ($request->input('faculdade')==0) {
                    $role = Sentinel::findRoleBySlug('admin');
                    $role->users()->attach($user);
            }else{
                    $role = Sentinel::findRoleBySlug('faculdade');
                    $role->users()->attach($user);
            }
            Session::flash('success', 'Sucesso: Utilizador Cadastrado com Sucesso');
            return redirect('/usuarios');
    }
}
