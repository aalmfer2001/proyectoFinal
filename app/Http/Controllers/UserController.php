<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    //

    public function guardar(Request $req) 
    {
        $user = new User;
        $user->name=$req->input('name');
        $user->localidad=$req->input('localidad');
        $user->email=$req->input('email');
        $user->email_verified_at=Carbon::now()->toDateTimeString();
        $user->password=Hash::make($req->input('password'));
        $user->rol="usuario";
        $user->save();
        return redirect()->route('login');
    }
}
