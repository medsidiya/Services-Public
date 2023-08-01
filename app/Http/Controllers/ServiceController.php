<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{

    public function index()
    {
        $services = DB::table('services')->get();
        $categories = Category::all();
        return view('pages.serviceAction', compact('services','categories'));
    }
    public function add(Request $request)
    {
        DB::table('services')->insert([
            'nom'=>$request->nom,
            'document'=>$request->document,
            'descrption'=>$request->description,
            'prix'=>$request->prix,
            'periode'=>$request->periode,
            'cteg_id'=>$request->cteg_id,
            'struct_id'=>$request->struct_id,
        ]);
        // return response("your data is added sucusfuly");
        Alert::success('Added successfuly', 'this service is added to the database');
        return redirect()->route('showServe');
    }

    public function update(Request $request, string $id)
    {
        $updateServ = DB::table('services')->where('id' , $id)->update([
            'nom'=>$request->nom,
            'document'=>$request->document,
            'descrption'=>$request->description,
            'prix'=>$request->prix,
            'periode'=>$request->periode,
            'cteg_id'=>$request->cteg_id,
            'struct_id'=>$request->struct_id,
        ]);
        Alert::success('update successfuly', 'your data is up to date');
        // return response('your data is up to date');
        // return view('pages.serviceAction' , compact('updateServ'));
        return redirect()->route('showServe');
    }

    public function edit(string $id)
    {
        $service = DB::table('services')->where('id' , $id)->first();
        return view('pages.updateServe' , compact('service'));
    }

    public function transport(string $id){
        $transprots = DB::table('services')->where('cteg_id' , $id)->get();
        $categorie = DB::table('categories')->where('id' , $id)->get();
        return view('transport' , compact('transprots', 'categorie'));
    }

    public function imprimer(string $id){
        $services = DB::table('services')->where('id' , $id)->get();
        $structurs = DB::table('structures')->where('id' , 1)->get();
        $categorie = DB::table('categories')->where('id' , $id)->get();
        return view('imprimer' , compact('services' , 'structurs','categorie'));
        // return $id;
    }
    public function print(string $id){
        $services = DB::table('services')->where('id' , $id)->get();
        $structurs = DB::table('structures')->where('id' , 1)->get();
        $categorie = DB::table('categories')->where('id' , $id)->get();
        return view('print' , compact('services' , 'structurs','categorie'));
        // return $id;
    }
    public function education(string $id){
        // $educations = DB::table('services')->where('cteg_id' , $id)->get();
        // return view('education' , compact('educations'));
        return $id;
    }

    public function delate(string $id)
    {
        $service = DB::table('services')->where('id' , $id)->delete();
        Alert::success('delate successfuly', 'this categorie is delated from the data base');
        return redirect()->route('showServe');
    }
}
