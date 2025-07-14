<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    //função que carrega a view onde no futuro teremos um form para adicionar users
    public function createUser(){
        return view('users.add_user');
    }

    public function allUsers(){

        //simula ir à base de dados carregar todos os users
        $users = $this->getUsers();
        return view('users.all_users', compact('users'));
    }


    private function getUsers(){
        //simula ir à base de dados carregar todos os users
        $users = ['João', 'Joana', 'Márcia'];
        return $users;
    }
}
