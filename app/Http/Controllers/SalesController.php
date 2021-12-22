<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function SalesReturn()
    {
        $user = Auth::user();
        return view('SALES.SalesReturn',
        ['title' => "Sales Return"]);
    }
    public function SalesInvoice()
    {
        $user = auth :: user();
        return view('SALES.SalesInvoice',
        ['title'=> "Sales Invoice"]);
    }
    public function Receiptandrefund()
    {
        $user = auth :: user();
        return view('SALES.Receipt&refund',
        ['title'=> "Receipt and refund"]);
    }
}
