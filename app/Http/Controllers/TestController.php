<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return "建物です";
    }

    public function number($room){
        return "部屋番号は" . $room . "です";
    }
}
