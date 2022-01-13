<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function StoreFile()
    {
        $user = Auth::user();
        return view('INVENTORY.Storefile',
        ['title' => "Store file"]);
    }
    public function ProductMasterFile()
    {
        $user = Auth::user();
        return view('INVENTORY.Productmasterfile',
        ['title' => "Product master file"]);
    }
    public function StoreAdjustment()
    {
        $user = Auth::user();
        return view('INVENTORY.Storeadjustment',
        ['title' => "Store adjustment"]);
    }
    public function ProductCategoryFile()
    {
        $user = Auth::user();
        return view('INVENTORY.Productcategoryfile',
        ['title' => "Product category file"]);
    }
}
