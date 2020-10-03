<?php

namespace App\Http\Controllers;


use DemeterChain\C;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::get();
        return view('Contact.index', compact('contacts'));
    }
    public function create(){
        return view('Contact.create');
    }

    public function store(Request $request){
        Contact::create([
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
            'phone'=>$request->get('phone'),
        ]);
        return redirect()->back();
    }

    public function edit($id){
        $contact = Contact::findOrFail($id);
        return view('Contact.edit', compact('contact'));
    }

    public function update($id){
        $contact = Contact::findOrFail($id);
        $contact->name = request('name');
        $contact->address = request('address');
        $contact->phone = request('phone');
        $contact->save();
        return redirect()->to('Contacts');

    }
    public function destroy($id){
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->to('Contacts');

    }








}
