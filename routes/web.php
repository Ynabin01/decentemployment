<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecentemploymentController; 

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
/*
Route::get('/', function () {
    return view('welcome');
});

*/


Route:: get('/', [DecentemploymentController::class,'index']);
Route:: get('/inner', [DecentemploymentController::class,'inner']);
Route:: get('/services', [DecentemploymentController::class,'services']);
Route:: get('/jobcategory', [DecentemploymentController::class,'jobcategory']);
Route:: get('/joblist', [DecentemploymentController::class,'joblist']);
Route:: get('/client', [DecentemploymentController::class,'client']);
Route:: get('/gallery', [DecentemploymentController::class,'gallery']);
Route:: get('/contact', [DecentemploymentController::class,'contact']);
Route:: get('/applyform', [DecentemploymentController::class,'applyform']);

 