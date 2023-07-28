<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Dashboard\UserController as AdminUserController;
use App\Http\Controllers\Dashboard\MealController as AdminMealController;
use App\Http\Controllers\Dashboard\PlanController as AdminPlanController;
use App\Http\Controllers\Dashboard\InvoiceController as AdminInvoiceController;
use App\Http\Controllers\Dashboard\PdfController as AdminPdfController;
use App\Http\Controllers\Dashboard\ExcelController as AdminExcelController;

use App\Http\Controllers\Dashboard\SearchController;
use App\Http\Controllers\front\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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


// Route For Login To Admin Dashboard...
Route::get('admin/login',[AdminController::class,'adminLogin'])->name('admin.login');
Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::post('admin/login',[AdminController::class,'checkadminLogin'])->name('save.admin.login');


// Route For Admin site....

Route::prefix('admin')->middleware('isAdmin')->group(function () {

    Route::resource('/users',AdminUserController::class)->middleware('isAdmin');
    Route::resource('/meals',AdminMealController::class)->middleware('isAdmin');
    Route::resource('/plans',AdminPlanController::class)->middleware('isAdmin');
    Route::resource('/invoices',AdminInvoiceController::class);
    Route::get('/invoices/{id}/pdf', [AdminPdfController::class, 'generatePDF'])->name('invoices.pdf');
    Route::get('/export/user', [AdminExcelController::class, 'exportuser'])->name('export.user');
    Route::get('/export/plan', [AdminExcelController::class, 'exportplan'])->name('export.plan');


});




//Route For user site.....
   Route::resource('/auth-users',UserController::class);

//Rout For HOME...
  // Route::get('/',[HomeController::class,'index']);
  Route::get('/', function () {
    return view('welcome');
    });
   Route::get('/home',[HomeController::class,'index'])->name('home');


   Auth::routes();




