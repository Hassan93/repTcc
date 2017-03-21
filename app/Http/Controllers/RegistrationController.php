<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use Sentinel;

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
            
            $role = Sentinel::findRoleBySlug('faculdade');
            $role->users()->attach($user);
            
            return redirect('/usuarios');
    }
}
