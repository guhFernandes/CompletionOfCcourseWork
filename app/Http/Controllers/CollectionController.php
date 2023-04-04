<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Collection;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CollectionController extends Controller
{
    public function create (Request $request) {
        
        $db = new collection;
        $db->description = $request->description;
        $db->save();

        return redirect('/list/collection');
        // ->with('msg','Cadastrado com sucesso!')
    }

    public function getCollectionAll() {
        return view('dashboard',['x'=>"list", 'type'=>"collection", 'list'=> Collection::all(),'collection'=>Collection::all(), 'category'=>Category::all()]);
    }

    public function getCollection (Request $request) {
        return view('editCollection', ['list'=> collection::find($request->id)]);
    }

    public function updateCollection (Request $request) {

        $db = collection::find($request->id);
        $db->description = $request->description;
        $db->save();
        return $this->getCollectionAll();
    }

    public function deleteCollection (Request $request) {
        $db = collection::find($request->id);
        $db->delete();
        return $this->getCollectionAll();
    }

    public function search(Request $request) {
        $db = collection::where('description','LIKE', '%' . $request->search. '%')
                ->get();
        return view('dashboard',['x'=>"list", 'type'=>'collection', 'list'=>$db, 'collection'=>Collection::all(), 'category'=>Category::all()]);
    }
}
