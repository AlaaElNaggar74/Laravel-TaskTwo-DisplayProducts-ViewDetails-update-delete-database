<?php

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





// use App\Http\Controllers\productController;
use App\Http\Controllers\studentController;


// Route::get('/', [productController::class ,"getAllProject"] );
// Route::get("/products",[productController::class ,"getAllProject"] );
// Route::get("/details/{id}",[productController::class ,"getProjectDetailse"] )->name('iti.show');
// Route::get("/about",[productController::class ,"aboutPage"] );
// Route::get("/contact",[productController::class ,"contactPage"] );
// Route::get("/landing",[productController::class ,"landingPage"] );


// ************************ studentController ****************************

Route::get('/', [studentController::class ,"landingPage"] );

Route::get('students', [studentController::class ,"index"] )->name("stu.inde");
Route::get("/formInput/create",[studentController::class ,"form_input"] )->name("student.input");
Route::get("/formInput/update/{id}",[studentController::class ,"form_update"] )->name("student.update");
Route::get("/stu_details/{id}",[studentController::class ,"get_std_details"] )->name("student.show");
Route::get("/stu_details/{id}/delete",[studentController::class ,"destroy"] )->name("student.destroy");
Route::post('students/', [studentController::class ,"store"] )->name("stu.store");
Route::post('students/update', [studentController::class ,"edit"] )->name("stu.edit");

Route::get("/about",[studentController::class ,"aboutPage"] );
Route::get("/contact",[studentController::class ,"contactPage"] );


// Route::get("/products",[productController::class ,"getAllProject"] );
// Route::get("/about",[productController::class ,"aboutPage"] );
// Route::get("/contact",[productController::class ,"contactPage"] );
// Route::get("/landing",[productController::class ,"landingPage"] );



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
