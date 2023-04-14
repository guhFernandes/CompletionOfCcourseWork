<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Collection;
use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


class UserController extends Controller
{
    public function create (Request $request) {
        
        $db = new User;
        $db->name = $request->name;
        $db->email = $request->email;
        $db->password = $request->password;
        $db->save();

        return redirect('/list/user');
        // ->with('msg','Cadastrado com sucesso!')
    }

    public function getUserAll() {
        return view('dashboard',['x'=>"list", 'type'=>"user", 'list'=> User::paginate(12),'collection'=>Collection::all(), 'category'=>Category::all()]);
    }

    public function getUser (Request $request) {
        return view('editUser', ['list'=> User::find($request->id)]);
    }

    public function updateUser (Request $request) {

        $db = User::find($request->id);
        $db->name = $request->name;
        $db->save();
        return $this->getUserAll();
    }

    public function deleteUser (Request $request) {
        $db = User::find($request->id);
        $db->delete();
        return $this->getUserAll();
    }

    public function search(Request $request) {
        $db = User::where('name','LIKE', '%' . $request->search. '%')
                ->get();
                return view('dashboard',['x'=>"list", 'type'=>"user", 'list'=> $db,'collection'=>Collection::all(), 'category'=>Category::all()]);
    }
}
