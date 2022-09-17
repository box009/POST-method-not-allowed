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

Route::get('/', function () {
    return view('welcome');
});
//এই টাইপের রাউট শুধু পেজ রিটার্ন করবে

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//এই টাইপের রাউট শুধু পেজের(কন্ট্রলারের) নিদ্দিশট (প্রি-মেড)ফাংশন পিং করবে

//route for form & database connectionS





use App\Http\Controllers\CreateController;
Route::get('/post/create', [CreateController::class, 'create']);
Route::get('/post', [CreateController::class, 'store']);