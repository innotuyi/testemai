<?php

use App\Mail\testEmail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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


Route::get('mail', function(){

    return new testEmail();
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('send', function(){
	Mail::to('patrickeddy586@gmail.com', function($message)
	{
		$message->subject('Mailgun and Laravel are awesome!');
		$message->from('innotuyi81@website_name.com', 'Website Name');
		$message->to('patrickeddy586@gmail.com');
	});
});