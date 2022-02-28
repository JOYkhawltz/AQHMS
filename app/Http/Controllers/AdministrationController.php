<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    public function LabTest()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Labtest',
        ['title' => "Lab Test"]);
    }
    public function TherapyRegistration()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Therapyregistration',
        ['title' => "Therapy Registration"]);
    }
    public function TherapeuticServices()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Therapeuticservices',
        ['title' => "Therapeutic Services"]);
    }
    public function AdmissionDetails()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Admissiondetails',
        ['title' => "Admission Details"]);
    }
    public function DayClosing()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Dayclosing',
        ['title' => "Day Closing"]);
    }
    public function AmbulanceReceipt()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Ambulancereceipt',
        ['title' => "Ambulance Receipt"]);
    }
    public function OPDSlip()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.OPDslip',
        ['title' => "OPD Slip"]);
    }
    public function LabTestApproval()
    {
        $user = Auth::user();
        return view('ADMINISTRATION.Labtestapproval',
        ['title' => "Lab Test Approval"]);
    }
}
