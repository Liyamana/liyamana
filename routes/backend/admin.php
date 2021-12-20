<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FileManagerController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\LetterTemplateController;
use App\Models\LettersTemplateCategory;
use App\Http\Controllers\Backend\LetterTemplatCategoryController;
// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('file_manager', [FileManagerController::class, 'index'])->name('file_manager.index');
Route::get('file_manager/getdetails', [FileManagerController::class, 'getdetails'])->name('file_manager.getdetails');
Route::get('file_manager/delete/{id}', [FileManagerController::class, 'destroy'])->name('file_manager.destroy');


Route::get('letter_template_categories', [LetterTemplatCategoryController::class, 'index'])->name('letter_template_categories.index');
Route::get('letter_template_categories/create', [LetterTemplatCategoryController::class, 'create'])->name('letter_template_categories.create');
Route::post('letter_template_categories/store', [LetterTemplatCategoryController::class, 'store'])->name('letter_template_categories.store');
Route::get('letter_template_categories/edit/{id}', [LetterTemplatCategoryController::class, 'edit'])->name('letter_template_categories.edit');
Route::get('letter_template_categories/get_details', [LetterTemplatCategoryController::class, 'get_details'])->name('letter_template_categories.get_details');


Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('settings/update', [SettingsController::class, 'settings_update'])->name('settings_update');

Route::get('about_us', [SettingsController::class, 'about_us'])->name('about_us');
Route::post('about_us/update', [SettingsController::class, 'about_us_update'])->name('about_us_update');

Route::get('privacy_policy', [SettingsController::class, 'privacy_policy'])->name('privacy_policy');
Route::post('privacy_policy/update', [SettingsController::class, 'privacy_policy_update'])->name('privacy_policy_update');

Route::get('terms_and_conditions', [SettingsController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::post('terms_and_conditions_update/update', [SettingsController::class, 'terms_and_conditions_update'])->name('terms_and_conditions_update');

Route::get('contactus_thanks', [SettingsController::class, 'contactus_thanks'])->name('contactus_thanks');
Route::post('contactus_thanks_update/update', [SettingsController::class, 'contactus_thanks_update'])->name('contactus_thanks_update');


