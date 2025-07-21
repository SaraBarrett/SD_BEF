<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function testSqlQueries(){

        //query de insert. no futuro, os dados a inserir vêm do formulário (resquest)
        // DB::table('users')->insert([
        //     'name'=> 'Sara',
        //     'email'=>'sara5@gmail.com',
        //     'password'=>'1234'
        // ]);

        //query de update. no futuro, os dados a actualizar vêm do formulário (resquest)
        DB::table('users')
        ->where('id', 4)
        ->update([
            'name' => 'Rita',
            'address'=> 'Rua da Rita',
            'updated_at' => now()
        ]);

        return response()->json('query ok!');
    }

    private function getUsers(){

        //simula ir à base de dados carregar todos os users
        $users = [
            ['id' => 1, 'name'=> 'Rita', 'phone'=> '915555555'],
            ['id' => 2, 'name'=> 'Rui', 'phone'=> '915555555'],
            ['id' => 3, 'name'=> 'Patrícia', 'phone'=> '915555555'],
        ];

        return $users;
    }
}
