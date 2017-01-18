<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegistrationController extends Controller
{
   public function register()
    {

      return view('auth.register');
    }

    public function postRegister(Request $request)
    {
      $user = Sentinel::RegisterAndActivate($request->all());
      $role = Sentinel::findRoleBySlug('admin');
      $role->users()->attach($user);

      return redirect('/');
    }
}
