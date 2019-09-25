<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function show(Contact $contact){
        return view('admin.contact.show', compact('contact'));
    }
    public function delete(Contact $contact)
    {
        return view('admin.contact.delete', compact('contact'));
    }

    public function destroy(Contact $contact, Request $request){
        $contact->delete();
        return response()->redirectToRoute('contact.index');
    }
}
