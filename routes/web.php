<?php


use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\Admin\DasboardController;
use App\Http\Controllers\Admin\LoactionController;
use App\Http\Controllers\Company\CompanyAuthController;
use App\Http\Controllers\Company\JobPostController;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontController::class, 'showFrontPage'])->name('home');
Route::get('/brows-job', [FrontController::class, 'showbrowsPage'])->name('browsPage');


Route::middleware('admin')->group(function () {
   Route::get('/dashboard', [DasboardController::class, 'dashboard'])->name('admin_dashboard');
   Route::get('/profile', [AdminAuthController::class, 'AdminProfile'])->name('admin_profile');
   Route::post('/profileUpdate',[AdminAuthController::class, 'profileUpdate'])->name('admin_profil_Update');
  
 });

Route::prefix('admin')->group(function () {
    // Route::get('/login', [AdminAuthController::class, 'LoginPage'])->name('admin_Login_page');
   Route::get('/login', [AdminAuthController::class, 'adminLoginPage'])->name('admin_login_page');
  
   Route::get('/forgetPassword', [AdminAuthController::class, 'forgetPassword'])->name('admin_forget_password');
   Route::get('/reset-Password/{token}/{email}', [AdminAuthController::class, 'resetPassword'])->name('admin_reset_password');
   Route::post('/login-submit', [AdminAuthController::class, 'loginSubmit'])->name('admin_login_submit');
   Route::get('/admin-logout', [AdminAuthController::class, 'adminLogout'])->name('admin_logout');
   Route::post('/admin/password-recover-page/', [AdminAuthController::class, 'forgetPassVarificatio' ])->name('forget_Pass_varification');
   Route::post('/password-recover-submit/{token}/{email}',[AdminAuthController::class, 'passwordRecoverSubmit'])->name('password_recover_Submit');
   Route::resource('/category', CategoryController::class);
   Route::resource('/locations', LoactionController::class);


});


Route::prefix('company')->group(function () { 
   Route::get('/signUp', [CompanyAuthController::class, 'ShowSignUp'])->name('company_ShowSignUp');
   Route::post('company-registered', [CompanyAuthController::class, 'store'])->name('company_registered');
   Route::get('Company-Email-Varified/{email}',[CompanyAuthController::class, 'CompanyEmailVarified'])->name('Company_Email_Varified');
   Route::get('login', [CompanyAuthController::class, 'LoginPage'])->name('company_show_login');
   Route::post('loginSubmit',[CompanyAuthController::class, 'loginSubmit'])->name('loginSubmit');
   Route::get('/company-logout', [CompanyAuthController::class, 'companylogout'])->name('company_logout');
 

   // Route::get('dashboard',[CompanyAuthController::class,'dashboard']);

});


Route::middleware('company')->group(function () {
    Route::get('com-dashboard',[CompanyAuthController::class,'companydashboard'])->name('company_dashboard');
      Route::resource('/post', JobPostController::class);
});