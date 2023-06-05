<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{

    //show product create page
    public function donationCreate()
    {
        return view('frontend.donationnow.index');
    }

    //add to database
    public function donationStore(Request $request)
    {
        $donation = new Donation();
        $donation->name     = $request->name;
        $donation->email    = $request->email;
        $donation->address  = $request->address;
        $donation->bkash_number   = $request->bkash_number;
        $donation->amount   = $request->amount;
        $donation->save();

        return back()->with('notification','Donation Add Successfully');
    }


}
