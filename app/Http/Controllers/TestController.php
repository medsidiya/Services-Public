<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TestController extends Controller
{
    public function testing() {
        return "testing controller"; 
    }
}
