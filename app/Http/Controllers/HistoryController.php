<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function history()
    {
        $donations = Donation::all();
        return view("backend.dashboard.history",['donations'=>$donations]);
    }


}
