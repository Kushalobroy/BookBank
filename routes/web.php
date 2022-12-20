<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MailController;
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
Route::get("/",[HomeController::class,"index"]);
Route::get("/redirects",[HomeController::class,"redirects"]);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get("/insertbook",[AdminController::class,"insertbook"]);
Route::get("/Home",[AdminController::class,"Home"]);
Route::post("/uploadbook",[AdminController::class,"uploadbook"]); 
Route::get("/Students",[AdminController::class,"Students"]); 
Route::get("/Issued-Books",[AdminController::class,"IssuedBooks"]); 
Route::get("/updatedeletebook",[AdminController::class,"updatedeletebook"]);
Route::get("/deletebook/{id}",[AdminController::class,"deletebook"]);
Route::get("/updatebook/{id}",[AdminController::class,"updatebook"]);
Route::get("/Books",[StudentController::class,"Books"]);
Route::get("/messagetolibrarian",[StudentController::class,"messagetolibrarian"]);
Route::post("/message",[StudentController::class,"message"]);
Route::get("/Messages",[AdminController::class,"Messages"]);
Route::get("/StudentProfile/{id}",[AdminController::class,"StudentProfile"]);
Route::get("/Book-Request",[AdminController::class,"BookRequest"]);
Route::get("/Book-Renewal-Request",[AdminController::class,"BookReneualRequest"]);
Route::get("/Book-Return-Request",[AdminController::class,"BookReturnRequest"]);
Route::post("/requestbook",[StudentController::class,"requestbook"]);
Route::get("/grant/{id}",[MailController::class,"grant"]);
Route::get("/Askforreturn/{id}",[MailController::class,"Askforreturn"]);
Route::get("/DeleteUser/{id}",[AdminController::class,"DeleteUser"]);
Route::get("/Admin-Profile",[AdminController::class,"AdminProfile"]);
Route::get("/Update-Password",[AdminController::class,"UpdatePassword"]);
Route::get("/DeleteMessage/{id}",[AdminController::class,"DeleteMessage"]);

