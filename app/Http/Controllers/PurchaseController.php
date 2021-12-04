<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function PurchaseReturn()
    {
        $user = Auth::user();
        return view('PURCHASE.PurchaseReturn',
        ['title' => "purchase"]);
    }
    public function PurchaseInvoice()
    {
        $user = Auth::user();
        return view('PURCHASE.PurchaseInvoice',
        ['title' => "purchase"]);
    }
    public function PurchaseOrder()
    {
        $user = Auth::user();
        return view('PURCHASE.PurchaseOrder',
        ['title' => "purchase"]);
    }
}
