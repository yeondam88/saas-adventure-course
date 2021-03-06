<?php

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

Route::domain('{subdomain}.' . env('DOMAIN'))->group(function () {
    Route::get('/', 'CourseController@course');
});

Route::get('/', function () {
    return view('home');
});

Route::get('logout', function () {
    \Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth', 'verified', 'subscriber']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //Course Routes
    Route::get('courses', 'CourseController@courses')->name('courses');
    Route::get('courses/create', 'CourseController@create');
    Route::post('courses/create', 'CourseController@create_course')->name('courses.create');

    // Dashboard Setting Routes
    Route::redirect('settings', 'settings/profile')->name('settings');
    Route::get('settings/profile', 'DashboardController@profile')->name('profile');
    Route::post('settings/profile', 'DashboardController@profile_save')->name('profile.save');
    Route::get('settings/security', 'DashboardController@security')->name('security');
    Route::post('settings/security', 'DashboardController@security_save')->name('security.save');
    Route::post('settings/billing/switch_plan', 'BillingController@switch_plan')->name('billing.switch_plan');
    Route::get('settings/invoices', 'DashboardController@invoices')->name('invoices');
    Route::get('settings/invoices/download/{invoice}', 'DashboardController@invoices_download')->name('invoices.download');
    Route::get('settings/billing/cancel', 'BillingController@cancel')->name('cancel');
    Route::get('settings/billing/resume', 'BillingController@resume')->name('resume');

    Route::view('support', 'support')->name('support');
    Route::post('support', 'supportController@send')->name('support.send');

    Route::get('announcements', 'AnnouncementController@index')->name('announcements');
    Route::get('announcement/unread', 'AnnouncementController@unread')->name('announcement.unread');
    Route::get('announcement/{id}', 'AnnouncementController@announcement')->name('announcement');
});

Route::group(['middleware' => ['auth', 'isAdmin']], function () {
    Route::get('admin', 'AdminController@index')->name('admin');
    Route::get('admin/notification', 'AdminController@notification')->name('admin.notification');
    Route::post('admin/create_notification', 'AdminController@create_notification')->name('admin.create_notification');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('settings/billing', 'BillingController@billing')->name('billing');
    Route::post('settings/billing', 'BillingController@billing_save')->name('billing.save');
});

Auth::routes(['verify' => true]);

// OAUTH Providers
Route::get('login/github', 'Auth\LoginController@redirectToGithubProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleGithubProviderCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogleProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleProviderCallback');

Route::get('login/facebook', 'Auth\LoginController@redirectToFacebookProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('p/{slug}', 'PageController@page')->name('page');