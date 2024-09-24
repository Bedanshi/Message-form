<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class UserController extends Controller

{
    public function message()
    {
        $contacts = Contact::all();
        return view('message', compact('contacts'));
    }

    public function index()
    {
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }
    public function store(Request $request)
    {
        //upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        $contact = new Contact;
        $contact->image = $imageName;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return back()->withSucess('Product Created Sucessfully!!');
    }

    public function edit($id)
    {
        $contact = Contact::where('id', $id)->first();
        return view(' edit', ['contact' => $contact]);
    }


    public function update(Request $request, $id)
    {

        $contact = Contact::where('id', $id)->first();
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $contact->image = $imageName;
        }

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();

        return back()->withSucess('Product Updated Sucessfully!!');
    }

    public function destroy($id)
    {
        $contact = Contact::where('id', $id)->first();
        $contact-> delete();
        return back()->withSucess('Product Deleted Sucessfully!!');
    }
}
