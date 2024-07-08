<?php

use App\Events\TestData;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Events\MessageSent;

Route::get('/test-data', function () {
    broadcast(new TestData('Hello World!'));
    return 'Message Sent!';
});
