<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoyController extends Controller
{
    public function affiche() {
        $categorie = DB::table('categories')->get();
        return view('services',compact('categorie'));
    }
}
