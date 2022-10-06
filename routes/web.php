<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\officer\OfficerDashboardController;
use App\Http\Controllers\officer\PreMembershipApplicationController;
use App\Http\Controllers\officer\ReportsMembershipApplicationController;
use App\Http\Controllers\officer\PreLoanApplicationController;
use App\Http\Controllers\officer\ReportsLoanApplicationController;
use  App\Http\Controllers\MembershipApplicationController;

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\ApproveMembershipApplicationController;
use App\Http\Controllers\admin\ApproveLoanApplicationController;
use App\Http\Controllers\admin\LoanApplicationReportsController;
use App\Http\Controllers\admin\AccountController;


use App\Http\Controllers\MembershipReportsController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ExpressLoanAppController;
use App\Http\Controllers\RegularSpecialLoanController;

// use App\Http\Controllers\admin\DashboardController;
// use App\Http\Controllers\admin\MembershipController;
// use App\Http\Controllers\admin\LoanController;
// use App\Http\Controllers\admin\MemberController;
// use App\Http\Controllers\officer\PreMembershipApplicationController;
// use App\Http\Controllers\officer\MembershipAppController;
// use App\Http\Controllers\officer\OfficerDashboardController;
// use App\Http\Controllers\officer\LoanAppController;

// use App\Http\Controllers\client\MembershipController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware(['auth', 'isAdmin'])->group(function() { 
  // ADMIN SIDE START ----------------------------------------------------------

//   Route::view('/admin/dashboard', 'admin.dashboard');
//   Route::view('/admin/membership', 'admin.membership');
//   Route::view('/admin/loan', 'admin.loan');
//   Route::view('/admin/approved-loans', 'admin.approved-loans');
//   Route::view('/admin/member', 'admin.member');

  // ADMIN SIDE END  -----------------------------------------------------------
// });


// CLIENT SIDE START ---------------------------------------------------------

// Route::view('/', 'client.home');
// Route::view('/regular-loans', 'client.regular-loans');
// Route::view('/express-loans', 'client.express-loans');
// Route::view('/special-loans', 'client.special-loans');
// Route::view('/contact-us', 'client.contact-us');
// Route::view('/about-us', 'client.about-us');
// Route::view('/membership-application', 'client.membership-application');
// Route::post('/membership_app',[MembershipController::class, 'membership_app']);
// Route::view('/pre_seminar', 'client.pre_seminar');




// CLIENT SIDE END   ---------------------------------------------------------

// ===================================================================================================================

// OFFICER SIDE START --------------------------------------------------------
// Route::resource('/officer/dashboard', OfficerDashboardController::class);
// Route::resource('membership',App\Http\Controllers\officer\MembershipAppController::class);
// Route::resource('/officer/membership-application', PreMembershipApplicationController::class);
// Route::view('/officer/dashboard', 'officer.dashboard');
// Route::view('/officer/loan', 'officer.loan');
// Route::view('/officer/membership', 'officer.membership');
// Route::view('/officer/pre-approve-loans', 'officer.pre-approve-loans');
// Route::view('/officer/pre-approved-membership', 'officer.pre-approved-membership');
// Route::get('/officer/membership',[MembershipAppController::class, 'memberapp_list']);
// OFFICER SIDE END   --------------------------------------------------------

// ===================================================================================================================

// ADMIN SIDE START ----------------------------------------------------------

// Route::view('/admin/dashboard', 'admin.dashboard');
// Route::view('/admin/membership', 'admin.membership');
// Route::view('/admin/loan', 'admin.loan');
// Route::view('/admin/approved-loans', 'admin.approved-loans');
// Route::view('/admin/member', 'admin.member');

// ADMIN SIDE END  -----------------------------------------------------------




















// Route::resource('/officer-dashboard', OfficerDashboardController::class);
// Route::resource('/membership', MembershipAppController::class);
// Route::resource('/loan', LoanAppController::class);

// Route::get('/approved-loans', function () {
//     return view('admin.approved-loans');
// });

Auth::routes();
Route::view("/", "client.home");
Route::view("/regular-special-loan-form", "client.regular-special-loan-form");
Route::view("/express-loan-form", "client.express-loan-form");
Route::view('/regular-loans', 'client.regular-loans');
Route::view('/special-loans', 'client.special-loans');
Route::view('/express-loans', 'client.express-loans');
Route::view('/contact-us', 'client.contact-us');
Route::view('/about-us', 'client.about-us');
Route::view('/membership-information', 'client.membership-information');
Route::view('/dashboard', 'client.dashboard');
Route::view('/officer/loan', 'officer.loan');
Route::view('/officer/pre-approved-loans', 'officer.pre-approved-loans');
Route::view('/admin/member', 'admin.member');
Route::resource('/membership-application', MembershipApplicationController::class);
Route::resource('/express-loan-form', ExpressLoanAppController::class);
Route::resource('/regular-special-loan-form', RegularSpecialLoanController::class);


//offcer
Route::resource('/officer/dashboard', OfficerDashboardController::class);
Route::resource('/officer/membership-application', PreMembershipApplicationController::class);
Route::resource('/officer/pre-approved-membership', ReportsMembershipApplicationController::class);
Route::resource('/officer/loan', PreLoanApplicationController::class);
Route::resource('/officer/pre-approved-loans', ReportsloanApplicationController::class);


//Admin
Route::resource('/admin/dashboard', AdminDashboardController::class);
Route::resource('/admin/membership', ApproveMembershipApplicationController::class);
Route::resource('/admin/approved-membership', MembershipReportsController::class);
Route::resource('/admin/loan', ApproveLoanApplicationController::class);
Route::resource('/admin/approved-loans', LoanApplicationReportsController::class);
Route::resource('/admin/member', MemberController::class);
Route::resource('/admin/accounts', AccountController::class);

Route::resource('/registration', RegistrationController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
