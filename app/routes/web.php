<?php

use App\Http\Controllers\CurdController;
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


route::get('/',[CurdController::class,'index']);
route::get('insert',[CurdController::class,'insert']);
route::post('insert',[CurdController::class,'store']);
