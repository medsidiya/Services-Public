<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class StructureController extends Controller
{

    public function index()
    {
        $structures = DB::table('structures')->get();
        return view('pages.structAction',compact('structures'));
    }
    public function insert(Request $request)
    {
        DB::table('structures')->insert([
            'nom'=>$request->nom,
            'cteg_id'=>$request->categ_id,
        ]);
        Alert::success('Added successfuly', 'this structre is added to the database');

        return redirect()->route('showStucture');
    }

    public function update(Request $request, string $id)
    {
        $updateCategorie = DB::table('structures')->where('id' , $id)->update([
            'nom'=>$request->nom,
            'cteg_id'=>$request->cteg_id,
        ]);
        Alert::success('update successfuly', 'your data is up to date');
        // return view('pages.updateCategorie' , compact('updateCategorie'));
        return redirect()->route('showStucture');
    }
    public function edit(string $id)
    {
        $structures = DB::table('structures')->where('id' , $id)->first();
        return view('pages.structAction' , compact('structures'));
    }

    public function delate(string $id)
    {
        $service = DB::table('structures')->where('id' , $id)->delete();
        Alert::success('delate successfuly', 'this categorie is delated from the data base');
        return redirect()->route('showStucture');
    }
}

