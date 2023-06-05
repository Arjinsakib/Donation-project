<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationPageController extends Controller
{
    public function donation()
        {
            return view('frontend.donation.index');
        }

}
