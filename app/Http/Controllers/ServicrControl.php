<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicrControl extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = DB::table('services')->get();
        return view('pages.addService',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('pages.addService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('services')->insert([
            'nom'=>$request->nom,
            'document'=>$request->document,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'periode'=>$request->periode,
            'cteg_id'=>$request->categorieId,
        ]);
        return response("your data is added sucusfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $editServ = DB::table('services')->where('id' , $id)->first();
        // return view('pages.etditService' , compact('editServ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $updateServ = DB::table('services')->where('id' , $id)->update([
        //     'nom'=>$request->nom,
        //     'document'=>$request->document,
        //     'descrption'=>$request->description,
        //     'prix'=>$request->prix,
        //     'periode'=>$request->periode,
        //     'cteg_id'=>$request->categorieId,
        // ]);
        // return view('pages.updateService' , compact('updateServ'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
