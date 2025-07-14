<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //função que carrega a view onde no futuro teremos um form para adicionar users
    public function createUser(){
        return view('users.add_user');
    }
}
