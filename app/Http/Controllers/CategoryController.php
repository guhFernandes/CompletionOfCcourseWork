<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CategoryController extends Controller
{
    public function create (Request $request) {
        
        $db = new Category;
        $db->name = $request->name;
        $db->save();

        return redirect('/list/category');
        // ->with('msg','Cadastrado com sucesso!')
    }

    public function getCategoryAll() {
        return view('dashboard',['x'=>"list", 'type'=>"category", 'list'=> Category::paginate(12),'collection'=>Collection::all(), 'category'=>Category::all()]);
    }

    public function getCategory (Request $request) {
        return view('editCategory', ['list'=> Category::find($request->id)]);
    }

    public function updateCategory (Request $request) {

        $db = Category::find($request->id);
        $db->name = $request->name;
        $db->save();
        return $this->getCategoryAll();
    }

    public function deleteCategory (Request $request) {
        $db = Category::find($request->id);
        $db->delete();
        return $this->getCategoryAll();
    }

    public function search(Request $request) {
        $db = Category::where('name','LIKE', '%' . $request->search. '%')
                ->get();
                return view('dashboard',['x'=>"list", 'type'=>"category", 'list'=> $db,'collection'=>Collection::all(), 'category'=>Category::all()]);
    }
}
