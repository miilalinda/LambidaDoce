<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store (Request $request)
    {
        $usuario = new User();

        $usuario->name =$request->input('name');
        $usuario->email =$request->input('email');
        $usuario->password = bcrypt($request->input('password'));

        $usuario->save();

        return redirect()->route('admin.home');
    }

}

