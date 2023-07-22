<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoyController extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('pages.categorieAction',compact('categories'));
    }
    public function insert(Request $request)
    {
        DB::table('Categories')->insert([
            'nom'=>$request->nom,
            'description'=>$request->description,
        ]);
        return response("your data is added sucusfuly");
    }

    public function update(Request $request, string $id)
    {
        $updateCategorie = DB::table('categories')->where('id' , $id)->update([
            'nom'=>$request->nom,
            'description'=>$request->description,
        ]);
        // return view('pages.updateCategorie' , compact('updateCategorie'));
        return redirect()->route('show');
    }

    public function edit(string $id)
    {
        $categorie = DB::table('categories')->where('id' , $id)->first();
        return view('pages.updateCategorie' , compact('categorie'));
    }

    public function delate(string $id)
    {
        $service = DB::table('categories')->where('id' , $id)->delete();
        return redirect()->route('show');
    }
}
