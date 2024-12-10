<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\LeadPartnerController;
use App\Http\Controllers\Admin\LeadController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/my-application', [IndexController::class, 'application'])->name('application');
Route::get('/partner', [IndexController::class, 'partner'])->name('partner');

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

    Route::group(['prefix' => 'lead-partner'], function () {
        Route::get('', [LeadPartnerController::class, 'index'])->name('admin.lead.partner');
        Route::get('add', [LeadPartnerController::class, 'add'])->name('admin.lead.partner.add');
        Route::post('insert', [LeadPartnerController::class, 'insert'])->name('admin.lead.partner.insert');
        Route::get('edit/{id}', [LeadPartnerController::class, 'edit'])->name('admin.lead.partner.edit');
        Route::put('update/{id}', [LeadPartnerController::class, 'update'])->name('admin.lead.partner.update');
        Route::delete('delete/{id}', [LeadPartnerController::class, 'delete'])->name('admin.lead.partner.delete');
    });

    Route::group(['prefix' => 'lead'], function () {
        Route::get('', [LeadController::class, 'index'])->name('admin.lead');
        Route::get('view', [LeadController::class, 'view'])->name('admin.lead.view');
    });
});
