<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\custlogin;
use App\Http\Controllers\report;
use App\Http\Controllers\usertable;
use App\Http\Controllers\usermodule;
use App\Http\controllers\bus_contro1;
use App\Http\controllers\booking_contro;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

///customer login
Route::view('custlogin',[custlogin::class, 'custlogin']);


//user crud


//Route::get('usertable',[usertable::class, 'usertable']);

Route::get('/user_livetable', [usertable::class,'usertable']);

Route::get('/user_livetable/fetch_data', [usertable::class,'fetch_data']);

//Route::post('/user_livetable/add_data', 'DepartmentLiveTable@add_data')->name('dept_livetable.add_data');

Route::post('/user_livetable/update_data',[usertable::class,'update_data'])->name('user_livetable.update_data');

Route::post('/user_livetable/delete_data', [usertable::class,'delete_data'])->name('user_livetable.delete_data');

Route::get('search', [usertable::class,'search']);

////usermodule

Route::view('ulogin',[usermodule::class, 'login']);

////////////////////////////////////////////////////

// Route::get('booknow',[usermodule::class, 'booknow']);
route::get('booking/{busid:bus_id}',[usermodule::class,'booking']);
route::get('book/{busid:bus_id}',[usermodule::class,'book']);
route::post('controllbooking',[usermodule::class,'controllbooking']);
// route::get('/controllbooking',[usermodule::class,'controllbooking']);


//////////////////////////////////////////////from page
Route::get('from',[usermodule::class, 'from']);
Route::post('fromenter',[usermodule::class, 'fromenter']);
Route::get('fromenter',[usermodule::class, 'fromenter']);

////////////////////////////////////////////////////////////////////////////
Route::get('/bus_contro1', 'App\Http\Controllers\bus_contro1@index');
Route::get('/bus_contro1/fetch_data',[bus_contro1::class, 'fetch_data']);

Route::post('/bus_contro1/add_data',[bus_contro1::class, 'add_data'])->name('bus_contro1.add_data');
Route::get('/bus_contro1/add_data',[bus_contro1::class, 'add_data'])->name('bus_contro1.add_data');

Route::post('/bus_contro1/update_data',[bus_contro1::class, 'update_data'])->name('bus_contro1.update_data');


Route::post('/bus_contro1/delete_data',[bus_contro1::class, 'delete_data'])->name('bus_contro1.delete_data');
Route::get('/bus_contro1/delete_data',[bus_contro1::class, 'delete_data'])->name('bus_contro1.delete_data');


// Route::get('/report', 'App\Http\Controllers\booking_contro@index');
Route::get('/fetch_bus', 'App\Http\Controllers\booking_contro@fetch_bus');
route::get('/check/{id}',[booking_contro::class,'check']);