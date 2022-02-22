<?php

use App\Http\Controllers\Practice\OnePracticeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('practice')->group(function(){
   Route::get('/',function(){
      return view('practice.index');
   });
   Route::resource('/practice1/task', OnePracticeController::class,['names'=>'practice1.task']);
});
