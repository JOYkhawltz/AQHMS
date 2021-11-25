<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('INVENTORY.inventory',
        ['title' => "inventory"]);
    }
}
