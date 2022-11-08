<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/get_contract_info',"App\Http\Controllers\contracts\ContractsReports@get");


/*
Route::get('/get_contract_info', function () {
    return view('welcome');
});
*/