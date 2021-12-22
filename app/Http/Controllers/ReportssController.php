<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportssController extends Controller
{
    
    public function generalledger()
    {
        $user = Auth::user();
        return view('REPORTSS.GeneralLedgerReports',
        ['title' => "General Ledger Reports"]);
    }
    public function OPDReports()
    {
        $user = Auth::user();
        return view('REPORTSS.OPDreports',
        ['title' => "OPD Reports"]);
    }
    public function SalesandPurchaseReports()
    {
        $user = Auth::user();
        return view('REPORTSS.SalesandPurchaseReports',
        ['title' => "Sales and Purchase Reports"]);
    }
    public function StockReports()
    {
        $user = Auth::user();
        return view('REPORTSS.StockReports',
        ['title' => "Stock Reports"]);
    }
    public function ChallanReports()
    {
        $user = Auth::user();
        return view('REPORTSS.ChallanReports',
        ['title' => "Challan Reports"]);
    }
    public function FinancialReports()
    {
        $user = Auth::user();
        return view('REPORTSS.FinancialReports',
        ['title' => "Financial Reports"]);
    }
}
