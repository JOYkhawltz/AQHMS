<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('SALES.sales',
        ['title' => "sales"]);
    }
}
