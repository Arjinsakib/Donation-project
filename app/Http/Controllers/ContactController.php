<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact.index');
    }

    public function contactStore(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->location = $request->location;
        $contact->email = $request->email;
        $contact->description = $request->description;
        $contact->save();

        return back()->with('notification','Thanks for being with us');
    }

}
