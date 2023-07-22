<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{

    public function index()
    {
        $services = DB::table('services')->get();
        return view('pages.serviceAction', compact('services'));
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
        ]);
        return response("your data is added sucusfuly");
        // return redirect()->route('serve');
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
        ]);
        // return response('your data is up to date');
        // return view('pages.serviceAction' , compact('updateServ'));
        return redirect()->route('showServe');
    }

    public function edit(string $id)
    {
        $service = DB::table('services')->where('id' , $id)->first();
        return view('pages.updateServe' , compact('service'));
    }

    public function delate(string $id)
    {
        $service = DB::table('services')->where('id' , $id)->delete();
        return redirect()->route('serve');
    }
}
