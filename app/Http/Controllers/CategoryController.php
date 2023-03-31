<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create (Request $request) {
        
        $db = new Category;
        $db->name = $request->name;
        $db->save();

        return redirect('/dashboard');
        // ->with('msg','Cadastrado com sucesso!')
    }

    public function getCategoryAll() {
        return view('dashboard',['x'=>"list", 'type'=>"category", 'list'=> Category::all()]);
    }

    public function getCategory (Request $request) {
        return view('editCategory', ['list'=> Category::find($request->id)]);
    }

    public function updateCategory (Request $request) {

        $db = Category::find($request->id);
        $db->description = $request->description;
        $db->save();
        return $this->getCategoryAll();
    }

    public function deleteCategory (Request $request) {
        $db = Category::find($request->id);
        $db->delete();
        return $this->getCategoryAll();
    }

    public function search(Request $request) {
        $db = Category::where('description', 'LIKE', '%' . $request->search. '%')
                ->get();
        return view('dashboard',['x'=>"list", 'type'=>'category', 'list'=>$db]);
    }
}
