<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Clothing;
use App\Models\Collection;

class ClothingController extends Controller
{
    public function create(Request $request)
    {

        if ($request->hasFile('imagem')) {
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $filename . "_" . time() . "." . $extension;
            $path = $request->file('imagem')->storeAs('public/roupas', $nameStore);
        } else {
            $nameStore = "noImagem.png";
        }

        $db = new Clothing;
        $db->reference = $request->reference;
        $db->name = $request->name;
        $db->description = $request->description;
        $db->price = $request->price;
        $db->category_id = $request->category_id;
        $db->user = $request->user_id;
        $db->collection_id = $request->collection_id;
        $db->patch = 'roupas/' . $nameStore;
        $db->save();

        return redirect('/list/clothing');
        // ->with('msg','Cadastrado com sucesso!')
    }

    public function getClothingAll()
    {
        
        return view('dashboard', ['x' => "list", 'type' => "clothing", 'list' => Clothing::all(), 'collection'=>Collection::all(), 'category'=>Category::all() ]);
    }

    public function getListClothing($id)
    {
        
        return view('clothesAlone', ['x' => "list", 'type' => "clothing", 'list' => Clothing::find($id), 'collection'=>Collection::all(), 'category'=>Category::all(), 'cat'=>Clothing::find($id)->category, 'col'=>Clothing::find($id)->collection]);
    }

    public function getClothing(Request $request)
    {
        return view('editClothing', ['list' => Clothing::find($request->id), 'collection'=>Collection::all(), 'category'=>Category::all(), 'cat'=>Clothing::find($request->id)->category, 'col'=>Clothing::find($request->id)->collection]);
    }

    public function updateClothing(Request $request)
    {

        if ($request->hasFile('imagem')) {
            $filenameWithExt = $request->file('imagem')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem')->getClientOriginalExtension();
            $nameStore = $filename . "_" . time() . "." . $extension;
            $path = $request->file('imagem')->storeAs('public/roupas', $nameStore);
            $nameStore = 'roupas/' . $nameStore;
        } else {
            $nameStore = $request->patch;
        }




        $db = Clothing::find($request->id);
        $db->reference = $request->reference;
        $db->name = $request->name;
        $db->description = $request->description;
        $db->price = $request->price;
        $db->category_id = $request->category_id;
        $db->user = $request->user_id;
        $db->collection_id = $request->collection_id;
        $db->patch = $nameStore;
        $db->save();
        
        return $this->getClothingAll();
    }

    public function deleteClothing(Request $request)
    {
        $db = Clothing::find($request->id);
        $db->delete();
        return $this->getClothingAll();
    }

    public function search(Request $request)
    {
        $db = Clothing::where('name', 'LIKE', '%' . $request->search . '%')->orWhere('reference','like', '%' . $request->search .'%')
            ->get();
        return view('dashboard', ['x' => "list", 'type' => 'clothing', 'list' => $db ,'collection'=>Collection::all(),'category'=>Category::all()]);
    }

    public function searchProdutos(Request $request)
    {
        $result = Clothing::paginate(8);
        $db = Clothing::where('name', 'LIKE', '%' . $request->produtos . '%')
            ->paginate();
        return view('produtos', ['x' => "list", 'type' => 'clothing', 'result' => $db ,['result' => $result],'col'=>Collection::all(),'cat'=>Category::all()]);
    }


    public function dashboard() 
    {
        return view('dashboard',['x'=>'','collection'=>Collection::all(),'category'=>Category::all()]);
    }

    public function store()
    {
        $perPage = 8;

        if (!empty($keyword)) {
            $result = Clothing::all()->latest()->paginate($perPage);
        } else {
            $result = Clothing::latest()->paginate($perPage);
        }

        return view('index', ['result' => $result]);
    }

    public function produtos()
    {
        $result = Clothing::paginate(8);
        return view('produtos', ['result' => $result]);
    }

    public function filterCategory(Request $request){

        $gustavo = Category::where('name', $request->name)->get();
        foreach ($gustavo as $key) {
            $gustavo_quem_fez = Clothing::where('category_id', '=', $key->id)->paginate();
        }
        return view('produtos', ['result'=>$gustavo_quem_fez]);
    }





}
