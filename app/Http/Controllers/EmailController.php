<?php

namespace App\Http\Controllers;

use App\Mail\Envio;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function index()
    {
        return view('about',['type'=> Type::all(), 'validate'=>'email', 'result'=>Email::paginate(10)]);
    }
    
    public function subscribe(Request $request)
    {
        $email = new Email;
        $email->email = $request->email;
        $email->save();
        return redirect('/');
    }

    public function contact(Request $request)
    {
        Mail::to($request->email)->send(new Envio($request->all()));
        return view('about');
    }
}
