<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\FrontController;
use App\Http\Controllers\Home\ApplicantController;

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
Route::get("/", function(){
	return redirect('/login');
});


Auth::routes();
/*-- Route  define for user controller- -*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user/add', [App\Http\Controllers\HomeController::class, 'Useradd'])->name('user.add');
Route::get('user/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('user.delete');
Route::get('user/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('user.edit');
Route::post('user/savedata', [App\Http\Controllers\HomeController::class, 'store'])->name('user.savedata');
Route::post('user/saveedited', [App\Http\Controllers\HomeController::class, 'saveedited'])->name('user.saveedited');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('admin/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');

/*-- End Route  defination for user controller- -*/

/*-- Route  starts for lender controller- -*/

Route::get('admin/lender', [App\Http\Controllers\LenderController::class, 'index'])->name('admin.lender');
Route::get('lender/add', [App\Http\Controllers\LenderController::class, 'create'])->name('lender.add');
Route::post('lender/savedata', [App\Http\Controllers\LenderController::class, 'store'])->name('lender.savedata');

Route::get('lender/delete/{id}', [App\Http\Controllers\LenderController::class, 'delete'])->name('user.delete');
Route::get('lender/edit/{id}', [App\Http\Controllers\LenderController::class, 'edit'])->name('lender.edit');

Route::post('lender/saveedited', [App\Http\Controllers\LenderController::class, 'update'])->name('lender.saveedited');
Route::get('lender/status/{id}', [App\Http\Controllers\LenderController::class, 'status'])->name('lender.status');

/*-- Ends Route  starts for lender controller- -*/

/*--  starts Roting for investor controller- -*/
Route::get('admin/investor', [App\Http\Controllers\InvestorController::class, 'index'])->name('admin.investor');
Route::get('investor/add', [App\Http\Controllers\InvestorController::class, 'create'])->name('investor.add');
Route::post('investor/savedata', [App\Http\Controllers\InvestorController::class, 'store'])->name('investor.savedata');

Route::get('investor/delete/{id}', [App\Http\Controllers\InvestorController::class, 'delete'])->name('investor.delete');
Route::get('investor/edit/{id}', [App\Http\Controllers\InvestorController::class, 'edit'])->name('investor.edit');

Route::post('investor/saveedited', [App\Http\Controllers\InvestorController::class, 'update'])->name('investor.saveedited');
Route::get('investor/status/{id}', [App\Http\Controllers\InvestorController::class, 'status'])->name('investor.status');


/*--  starts Routing for Role controller- -*/

Route::get('admin/role', [App\Http\Controllers\RoleController::class, 'index'])->name('admin.role');
Route::get('role/add', [App\Http\Controllers\RoleController::class, 'create'])->name('role.add');
Route::post('role/savedata', [App\Http\Controllers\RoleController::class, 'store'])->name('role.savedata');

Route::get('role/delete/{id}', [App\Http\Controllers\RoleController::class, 'delete'])->name('role.delete');
Route::get('role/edit/{id}', [App\Http\Controllers\RoleController::class, 'edit'])->name('role.edit');
Route::post('role/saveedited', [App\Http\Controllers\RoleController::class, 'update'])->name('role.saveedited');



/*--  starts Routing for lone controller- -*/

Route::get('admin/loan', [App\Http\Controllers\LoanController::class, 'index'])->name('loan.role');
Route::get('loan/add', [App\Http\Controllers\LoanController::class, 'create'])->name('loan.add');
Route::post('loan/savedata', [App\Http\Controllers\LoanController::class, 'store'])->name('loan.savedata');

Route::get('loan/delete/{id}', [App\Http\Controllers\LoanController::class, 'delete'])->name('loan.delete');
Route::get('loan/edit/{id}', [App\Http\Controllers\LoanController::class, 'edit'])->name('loan.edit');
Route::post('loan/saveedited', [App\Http\Controllers\LoanController::class, 'update'])->name('loan.saveedited');

Route::get('lender/sendbasicemail', [App\Http\Controllers\LenderController::class, 'basic_email'])->name('loan.sendbasicemail');




/*---starting routing for home pages */

Route::get('/front',[FrontController::class,'index'])->name('front');
Route::get('/register_applicant',[FrontController::class,'register_applicant'])->name('register_applicant');
Route::get('/login_applicant',[FrontController::class,'login_applicant'])->name('login_applicant');
Route::post('/registration_applicant',[FrontController::class,'registration_applicant'])->name('registration_applicant');

Route::post('/loginapplicant',[FrontController::class,'loginapplicant'])->name('loginapplicant');
Route::get('/forget_password',[FrontController::class,'forget_password'])->name('forget_password');

Route::get('/applicant_dashboard',[ApplicantController::class,'index'])->name('applicant_dashboard');
Route::get('/applicantlogout',[FrontController::class,'applicantlogout'])->name('applicantlogout');





