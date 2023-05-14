<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PaginaPrincipalController extends Controller
{

    public function inicio()
    {       

        return view("inicio") ;

    }
}
