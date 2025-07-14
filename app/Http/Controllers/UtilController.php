<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function index() {

        $myName = $this->getUser();
        return view('utils.homepage', compact('myName'));
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
