<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanySite;
use App\Models\SecurityGuard;
use App\Models\Staff;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $staffcount = Staff::count();
        $companycount = Company::count();
        $companysitecount = CompanySite::count();
        $securitycount = SecurityGuard::count();
        return view('admin.dashboard',compact('staffcount','companycount','companysitecount','securitycount'));
    }
}
