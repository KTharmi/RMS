<?php

namespace App\Http\Controllers\User;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('user/contact');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'register_no'=>'required',
            'email'=>'required',
            'description'=>'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->register_no = $request->register_no;
        $contact->description= $request->description;
        $contact->faculty= $request->Faculty;
        $contact->save();

        return redirect(route('contact'));
    }
}
