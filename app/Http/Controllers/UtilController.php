<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function index() {

        $myName = $this->getUser();

        $loginUser = [
            'name' =>'Sara',
            'email' => 'sara@gmail.com',
            'phone' => '96666666'
        ];

        return view('utils.homepage', compact('myName', 'loginUser'));
    }

    public function sayHello(){
        $myName = $this->getUser();
        return view('utils.hello', compact('myName'));
    }

    private function getUser(){
        //query à base de dados para buscar o user
        $myName = 'Sara';
        return $myName;

    }

}
