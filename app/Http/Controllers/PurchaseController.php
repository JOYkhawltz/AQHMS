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
        ['title' => "Purchase Return"]);
    }
    public function PurchaseInvoice()
    {
        $user = Auth::user();
        return view('PURCHASE.PurchaseInvoice',
        ['title' => "Purchase Invoice"]);
    }
    public function PurchaseOrder()
    {
        $user = Auth::user();
        return view('PURCHASE.PurchaseOrder',
        ['title' => "Purchase Order"]);
    }
}
