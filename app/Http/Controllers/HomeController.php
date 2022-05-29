<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.mesaje.index')->with('contacts', $contacts);
    }
    public function edit(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        return view('admin.mesaje.edit')->with('contact',$contact);
    }
    public function update(Request $request, Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $contact->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
            'program'=>$request->program,
            'message'=>$request->message,
            'paid'=>$request->paid
        ]);
        return redirect(route('home'))->with('success','Record updated');
    }
    public function delete(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $contact->delete();
        return redirect(route('home'))->with('success','Record removed');
    }
}
