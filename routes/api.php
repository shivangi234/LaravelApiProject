<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// //public route
// Route::get('/students',[StudentController::class,'index']); //show data
// Route::get('/students/{id}',[StudentController::class,'show']); //particular id
// Route::post('/students',[StudentController::class,'store']); //create
// Route::put('/students/{id}',[StudentControedller::class,'update']); //update on id entire
// Route::delete('/students/{id}',[StudentController::class,'destroy']);//delete
// Route::get('/students/search/{city}',[StudentController::class,'search']);//search based on city

//one api that do all crud
Route::resource('/students',StudentController::class);

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);

//protected routes
// Route::middleware('auth:sanctum')->get('/students',
// [StudentController::class,'index']);
//  Route::middleware('auth:sanctum')->get('/students/{id}',
//  [StudentController::class,'show']);


// Route::middleware('auth:sanctum')->group(function(){
//     Route::get('/students',[StudentController::class,'index']); //show data
//     Route::get('/students/{id}',[StudentController::class,'show']); //particular id
//      Route::post('/students',[StudentController::class,'store']); //create
//     Route::put('/students/{id}',[StudentController::class,'update']); //update on id entire
//      Route::delete('/students/{id}',[StudentController::class,'destroy']);//delete
//      Route::get('/students/search/{city}',[StudentController::class,'search']);//search based on city
   
   
//      Route::post('/logout',[UserController::class,'logout']);
//     });


    //partially protected
    //public
    // Route::get('/students',[StudentController::class,'index']); 
    //  Route::get('/students/{id}',[StudentController::class,'show']);
    //  Route::get('/students/search/{city}',[StudentController::class,'search']);
    // //protected
    // Route::middleware('auth:sanctum')->group(function(){
    // Route::post('/students',[StudentController::class,'store']); //create
    // Route::put('/students/{id}',[StudentController::class,'update']); //update on id entire
    // Route::delete('/students/{id}',[StudentController::class,'destroy']);//delete
    // Route::post('/logout',[UserController::class,'logout']);
    // });


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
