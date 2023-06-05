<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class PeopleContactController extends Controller
{
    public function peopleContact()
    {
        $contacts = Contact::all();
        return view("backend.dashboard.contact",['contacts'=>$contacts]);
    }
}
