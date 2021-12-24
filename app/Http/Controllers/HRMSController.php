<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HRMSController extends Controller
{
    public function DailyAttendance()
    {
        $user = Auth::user();
        return view('HRMS.Dailyattendancefile',
        ['title' => "Daily Attendance"]);
    }
    public function EmployeeMaster()
    {
        $user = Auth::user();
        return view('HRMS.Employeemasterfile',
        ['title' => "Employee Master"]);
    }
    public function Designation()
    {
        $user = Auth::user();
        return view('HRMS.Designationfile',
        ['title' => "Designation"]);
    }
    public function Holiday()
    {
        $user = Auth::user();
        return view('HRMS.Holidayfile',
        ['title' => "Holiday"]);
    }
}
