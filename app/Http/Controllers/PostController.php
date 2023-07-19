<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function create(){
        return view('posts/create');
    }

    public function insert(Request $request){

        DB::table('services')->insert([
            'nom'=>$request->nom,
            'document'=>$request->document,
            'descrption'=>$request->description,
            'prix'=>$request->prix,
            'periode'=>$request->periode,
            'cteg_id'=>$request->categorieId,
        ]);
        return response("your data is added sucusfuly");


        // DB::table('categories')->insert([
        //     'nom'=>$request->nom,
        //     'description'=>$request->description,
        // ]);
        // return response("the data is added succesfuly");
    }
}
