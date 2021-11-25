<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HIMSController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('HIMS.hims',
        ['title' => "HIMS"]);
    }
}
