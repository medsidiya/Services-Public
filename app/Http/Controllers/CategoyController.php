<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Category;
use Spatie\Backtrace\File;

class CategoyController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // return  $categories;
        // Alert::success('Added successfuly', 'this categorie is added to the database');
        return view('pages.categorieAction', compact('categories'));
    }
    public function affiche()
    {
        $categories = Category::all();
        // return  $categories;
        return view('/categorie', compact('categories'));
    }

    // public function store(Request $request)
    // {
    //     $category = new category;
    //     $category->name = $request->input('name');

    //     if($request->hasfile('image'))
    //     {
    //         $file = $request->file('image');
    //         $extenstion = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extenstion;
    //         $file->move('uploads/categorys/', $filename);
    //         $category->image = $filename;
    //     }

    //     $category->save();
    //     return redirect()->back()->with('message','category Image Upload Successfully');
    // }
    public function insert(Request $request)
    {
        $category = new Category;
        $category->nom = $request->input('nom');
        $category->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('imgs/icons/', $filename);
            $category->image = $filename;
        }

        $category->save();
        return redirect()->back()->with('message','category Image Upload Successfully');
        // DB::table('Categories')->insert([
        //     'nom'=>$request->nom,
        //     'description'=>$request->description,
        // ]);
        // return response("your data is added sucusfuly");
        // Alert::success('Added successfuly', 'this categorie is added to the database');
        // return redirect('auth')->with('success', 'Profile updated!');
    }

    public function update(Request $request, string $id)
    {
        // $updateCategorie = DB::table('categories')->where('id' , $id)->update([
        //     'nom'=>$request->nom,
        //     'description'=>$request->description,
        //     'image'=>$request->image,
        // ]);

        $category = Category::find($request->id);
        $category->nom = $request->nom;
        $category->description = $request->description;
        // $category->ima = $request->description;

        if($request->hasfile('image'))
        {
            $destination = 'imgs/icons/'.$category->image;
            if (file_exists($destination)) {
                Storage::deleteDirectory($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('imgs/icons/', $filename);
            $category->image = $filename;
        }
        $category->update();
        Alert::success('update successfuly', 'your data is up to date');
        // return view('pages.updateCategorie' , compact('updateCategorie'));
        return redirect()->route('show');
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $category = Category::where(function($query) use ($search){
            $query->where('nom', 'like',"%$search%")
            ->orWhere('description','like',"%$search%");
        })
        // ->orwhereHas('categories',function($query) use ($search){
        //     $query->where('nom', 'like',"%$search%");
        // })
        ->get();
        return view('pages.categorieAction',compact('category','search'));

    }
    public function edit(string $id)
    {
        // $categorie = DB::table('categories')->where('id' , $id)->first();
        $categorie  = Category::find($id);
        return view('pages.updateCategorie' , compact('categorie'));
    }

    public function delate(string $id)
    {
        $service = DB::table('categories')->where('id' , $id)->delete();
        Alert::success('delate successfuly', 'this categorie is delated from the data base');
        return redirect()->route('show');
    }
}
