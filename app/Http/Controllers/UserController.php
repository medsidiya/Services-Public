<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('utilisateures')->get();
        $structurs = Structure::all();
        return view('pages.userAction',compact('users','structurs'));
    }
    public function insert(Request $request)
    {
        DB::table('utilisateures')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'struct_id'=>$request->struct_id,
        ]);
        // return response("your data is added sucusfuly");
        Alert::success('Added successfuly', 'this user is added to the database');

    }

    public function update(Request $request, string $id)
    {
        $updateCategorie = DB::table('utilisateures')->where('id' , $id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'struct_id'=>$request->struct_id,
        ]);
        Alert::success('update successfuly', 'your data is up to date');
        // return view('pages.updateCategorie' , compact('updateCategorie'));
        return redirect()->route('showUsers');
    }

    public function edit(string $id)
    {
        $users = DB::table('utilisateures')->where('id' , $id)->first();
        return view('pages.userAction' , compact('users'));
    }

    public function delate(string $id)
    {
        $service = DB::table('utilisateures')->where('id' , $id)->delete();
        Alert::success('delate successfuly', 'this categorie is delated from the data base');
        return redirect()->route('showUsers');
    }
}
