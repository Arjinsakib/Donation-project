<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {

        return view('backend.admin-index');
    }
}
