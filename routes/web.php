<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'homeIndex']);
Route::get('/invitation/to/{username?}', [HomeController::class, 'invitationWelcome']);
Route::get('/invitation/to/{name?}/details', [HomeController::class, 'invitationIndex']);
Route::post('/invitation/send-wishes', [HomeController::class, 'sendWishes']);
Route::get('/invitation/generate-link', [HomeController::class, 'generateInvitationLinkIndex']);
Route::post('/invitation/generate-link/generate', [HomeController::class, 'generateInvitationLink']);
