<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CompanysiteController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SecurityController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Auth\ClientController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get("/",[LoginController::class,"login"])->name('login');
Route::get("/login",[LoginController::class,"login"])->name('login');
Route::post("/loginSubmit",[LoginController::class,"loginSubmit"]);
Route::middleware(['auth'])->group(function () {
    Route::get("/dashboard",[DashboardController::class,"index"])->name('adminDashboard');
    Route::get("/changepwd",[LoginController::class,"showchangepwdform"])->name('changePassword');
    Route::post("/changepwd",[LoginController::class,"updatepassword"])->name('updatepassword');
    Route::get("/logout",[LoginController::class,"logout"])->name('logout');
    Route::get("/security",[SecurityController::class,"create"]);
    Route::post("/securitysubmit",[SecurityController::class,"store"])->name('store');
    Route::get("/securitytable",[SecurityController::class,"index"])->name('securityTable');
    Route::get("/admin/securityDelete/{id}",[SecurityController::class,"destroy"])->name('securityDelete');
    Route::get('/admin/securityedit/{id}', [SecurityController::class, 'edit'])->name('securityEdit');
    Route::post('/admin/securityupdate/{id}', [SecurityController::class, 'update'])->name('securityupdate');
    Route::get("/company",[CompanyController::class,"create"])->name('companyCreate');
    Route::post("/submit",[CompanyController::class,"store"])->name('store');
    Route::get("/companytable",[CompanyController::class,"index"])->name('companyTable');
    Route::get("/admin/companyDelete/{id}",[CompanyController::class,"destroy"])->name('companyDelete');
    Route::get('/admin/companyedit/{id}', [CompanyController::class, 'edit'])->name('companyEdit');
    Route::post('/admin/companyupdate/{id}', [CompanyController::class, 'update'])->name('companyupdate');
    Route::get("/companysite",[CompanysiteController::class,"create"])->name('companySite');
    Route::post("/sitesubmit",[CompanysiteController::class,"store"])->name('sitestore');
    Route::get("/companysitetable",[CompanysiteController::class,"index"])->name('companysiteTable');
    Route::get("/admin/delete/{id}",[CompanysiteController::class,"destroy"])->name('deletecompanysite');
    Route::get('/admin/companysiteedit/{id}', [CompanysiteController::class, 'edit'])->name('companysiteEdit');
    Route::post('/admin/companysiteupdate/{id}', [CompanysiteController::class, 'update'])->name('companysiteupdate');
    Route::get("/staff",[StaffController::class,"create"])->name('staff');
    Route::post("/staffsubmit",[StaffController::class,"store"]);
    Route::get("/stafftable",[StaffController::class,"index"])->name('staffTable');
    Route::get("/admin/deletestaff/{id}",[StaffController::class,"destroy"])->name('deletestaff');
    Route::get('/admin/staffedit/{id}', [StaffController::class, 'edit'])->name('staffEdit');
    Route::post('/admin/staffupdate/{id}', [StaffController::class, 'update'])->name('staffupdate');
});