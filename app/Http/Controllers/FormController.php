<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
        $mesages = Contact::latest()->get();

        return view('form')->with('messages',$mesages);
    }
    public function store(Request $request){
        Contact::create([
           'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'program'=>$request->program,
            'message'=>$request->message
        ]);
    }


}
