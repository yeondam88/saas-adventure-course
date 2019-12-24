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

Route::get('/', function () {
    return view('home');
});
Auth::routes(['verify' => true]);

Route::get('/logout', function () {
    \Auth::logout();
    return redirect('/');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    Route::redirect('settings', 'settings/profile')->name('settings');
    Route::get("settings/profile", 'DashboardController@profile')->name('profile');
    Route::post("settings/profile", 'DashboardController@profile_save')->name('profile.save');
    Route::get("settings/security", 'DashboardController@security')->name('profile');
    Route::post("settings/security", 'DashboardController@security_save')->name('security.save');
    Route::get("settings/billing", 'DashboardController@billing')->name('billing');
    Route::post("settings/billing", 'DashboardController@billing_save')->name('billing.save');
});

Route::get('/home', 'HomeController@index')->name('home');