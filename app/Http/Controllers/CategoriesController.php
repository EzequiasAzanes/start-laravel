<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    public function create(){
        return view('categories.create');
    }
    public function edit($id){
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, $id){
        $request->validate([
          'title' => 'required|unique:categories,title,'  .$id
        ]);
        $category = Category::find($id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        return redirect('categories');
    }
    public function destroy($id){
      $category = Category::find($id);
      $category->delete();
      return redirect('categories');
    }
    public function index(){
      $categories = Category::paginate(4);
      return view('categories.index', compact('categories'));
    }
    public function store(Request $request){
      //dd($request->all());
      $request->validate([
        'title' => 'required|unique:categories'
      ]);
      $category = new Category;
      $category->title = $request->title;
      $category->description = $request->description;
      $category->save();
      return redirect('categories');
    }
}
