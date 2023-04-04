<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {


        $categories = Category::get();
        return view('categories.list', ['categories' => $categories]);

    }

    public function create()
    {
        return view('categories.new');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->Firstname = $request->Firstname;
        $category->lastname = $request->lastname;
        $category->email = $request->email;
        $category->save();
        return redirect('/');
//        dd($request->Firstname)

    }

    public function edit($id){
     $category = Category::where('id',$id)->first();

     return view('categories.edit',['category' => $category]);
    }

    public function update(Request $request, $id){
        $category = Category::where('id',$id)->first();
        $category->Firstname = $request->Firstname;
        $category->lastname = $request->lastname;
        $category->email = $request->email;
        $category->save();
        return redirect('/');
    }

    public function destroy($id){
        $category =  Category::whereId($id)->first();
        $category->delete();
        return redirect ('/');

    }

}

