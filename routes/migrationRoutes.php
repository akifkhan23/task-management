
<?php

use Illuminate\Support\Facades\Route;


Route::get('/migrate', function () {
    echo Artisan::call('migrate');
    echo 'All migration run successfully';
});

Route::get('/seed-users', function () {
    Artisan::call('db:seed --class=UsersTableSeeder');
    return 'UsersTableSeeder executed successfully.';
});
