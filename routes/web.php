<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DashboardController;
use  App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return redirect()->route('dashboard.index');
});



Auth::routes();


        Route::middleware(['auth'])->group(function () {
        Route::resource('dashboard',DashboardController::class);

        Route::controller(UsersSettingController::class)->prefix('usersSetting')->group(function (){
            Route::get('users_detail','users_detail')->name('usersSetting.users_detail');
            Route::post('profile_update/{id}','profile_update')->name('usersSetting.profile_update');
        });

        Route::get('task/create','TaskController@create')->name('task.create');
        Route::post('task/store','TaskController@store')->name('task.store');
        Route::get('task','TaskController@updateStatus')->name('update_status');
        Route::get('task/edit/{id}','TaskController@edit')->name('task.edit');
        Route::post('task/update/{id}','TaskController@update')->name('task.update');
        Route::get('task/delete','TaskController@destroy')->name('task.delete');
 });

Route::get('/migrate', function () {
    echo Artisan::call('migrate');
    echo 'All migration run successfully';
});

Route::get('/seed-users', function () {
    Artisan::call('db:seed --class=UsersTableSeeder');
    return 'UsersTableSeeder executed successfully.';
});

