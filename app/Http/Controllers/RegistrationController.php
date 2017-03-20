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
      $user = Sentinel::RegisterAndActivate($request->all());
      
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($user);
      
      return redirect('/usuarios');
    }
}
