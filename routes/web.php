<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shController;
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

// Route::get('/redit',function(){
//     return redirect('https://web.whatsapp.com/');
// });

Route::get('/redit', [shController::class, 'head']);

Route::post('/tambah', [shController::class, 'add']);

Route::get('/delete/{id}', [shController::class, 'delete']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/homepage',function(){
    return view('homepage');
});

 