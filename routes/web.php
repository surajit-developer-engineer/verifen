<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\StaticController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\LeadPartnerController;
use App\Http\Controllers\Admin\LeadController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/my-application', [IndexController::class, 'application'])->name('application');
Route::get('/partner', [IndexController::class, 'partner'])->name('partner');
Route::get('/partner-signup', [IndexController::class, 'partnerSignup'])->name('partner.signup');


Route::get('/terms-of-use', [StaticController::class, 'termsOfUse'])->name('terms.of.use');
Route::get('/privacy-policy', [StaticController::class, 'privacyPolicy'])->name('privacy.policy');
Route::get('/tcpa-consent', [StaticController::class, 'tcpaConsent'])->name('tcpa.consent');
Route::get('/terms-of-application', [StaticController::class, 'termsOfApplication'])->name('terms.of.application');
Route::get('/california-privacy', [StaticController::class, 'californiaPrivacy'])->name('california.privacy');
Route::get('/credit-authorization', [StaticController::class, 'creditAuthorization'])->name('credit.authorization');
Route::get('/electronic-disclosure', [StaticController::class, 'electronicDisclosure'])->name('electronic.disclosure');
Route::get('/opt-out', [StaticController::class, 'optOut'])->name('opt.out');
Route::get('/contact', [StaticController::class, 'contactUs'])->name('contact.us');
Route::get('/investor-program', [StaticController::class, 'investorProgram'])->name('investor.program');
Route::get('/business-loans', [StaticController::class, 'businessLoans'])->name('business.loans');
Route::get('/business-loan-application', [StaticController::class, 'businessLoanApplication'])->name('business.loan.application');
Route::get('/partners-application', [StaticController::class, 'partnersApplication'])->name('partners.application');
Route::get('/investors-application', [StaticController::class, 'investorsApplication'])->name('investors.application');
Route::get('/business-growth-center', [StaticController::class, 'businessGrowthCenter'])->name('business.growth.center');
Route::get('/blog-details', [StaticController::class, 'blogDetails'])->name('blog.details');




Route::group([
    'prefix' => 'administrator'
], function () {
    Route::get('/', [AuthController::class, 'index'])->name('admin');
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login');
});

Route::group([
    'middleware' => ['web'],
    'prefix' => 'administrator'
], function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::post('profile/change-password', [ProfileController::class, 'changePassword'])->name('admin.profile.change.password');
    Route::post('profile/update', [ProfileController::class, 'profileUpdate'])->name('admin.profile.update');

    Route::group(['prefix' => 'partner'], function () {
        Route::get('', [LeadPartnerController::class, 'index'])->name('admin.lead.partner');
        Route::get('add', [LeadPartnerController::class, 'add'])->name('admin.lead.partner.add');
        Route::post('insert', [LeadPartnerController::class, 'insert'])->name('admin.lead.partner.insert');
        Route::get('edit/{id}', [LeadPartnerController::class, 'edit'])->name('admin.lead.partner.edit');
        Route::put('update/{id}', [LeadPartnerController::class, 'update'])->name('admin.lead.partner.update');
        Route::delete('delete/{id}', [LeadPartnerController::class, 'delete'])->name('admin.lead.partner.delete');
    });

    Route::group(['prefix' => 'loan'], function () {
        Route::get('', [LeadController::class, 'index'])->name('admin.lead');
        Route::get('view', [LeadController::class, 'view'])->name('admin.lead.view');
    });
});
