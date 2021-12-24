<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('accounts.account',
        ['title' => "accounts"]);
    }
    public function ChartOfAccount()
    {
        $user = Auth::user();
        return view('accounts.Chartofaccount',
        ['title' => "Chart Of Account"]);
    }
    public function JournalVoucher()
    {
        $user = Auth::user();
        return view('accounts.Journalvoucher',
        ['title' => "Journal Voucher"]);
    }
    public function GenerateSalary()
    {
        $user = Auth::user();
        return view('accounts.Generatesalary',
        ['title' => "Generate Salary"]);
    }
    public function MonthlyTransaction()
    {
        $user = Auth::user();
        return view('accounts.Monthlytransactionfile',
        ['title' => "Monthly Transaction"]);
    }
    public function IncomeTaxChallan()
    {
        $user = Auth::user();
        return view('accounts.Incometaxchallan',
        ['title' => "Income Tax Challan"]);
    }
    public function StockTransferChallan()
    {
        $user = Auth::user();
        return view('accounts.Stocktransferchallan',
        ['title' => "Stock Transfer Challan"]);
    }
    public function CashBook()
    {
        $user = Auth::user();
        return view('accounts.CashBook',
        ['title' => "Cash Book"]);
    }
    public function BankBook()
    {
        $user = Auth::user();
        return view('accounts.Bankbook',
        ['title' => "Bank Book"]);
    }
}
