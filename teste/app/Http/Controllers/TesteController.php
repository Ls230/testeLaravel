<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
   public function index(){
       return view('teste');
   }

    public function teste1(){
        return "teste 1";
    }

    public function teste2(){
        return "teste 2";
    }

    public function teste3(){
        return "teste 3";
    }

}
