<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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


//----------------------------Start--Event Calendar -Dhananjana Routes----------------------------------
//-----------------------------------------------------------------------------------------------


Route::get('/', function () {
    return view('welcome');
});

//Route to Display eventpage-Event Calendar View
Route::get('/events',[EventController::class,'index'] );
//Route to Add Event to Calendar-view
Route::get('/addeventurl',[EventController::class,'display'] );
//Route to dispaly blade-Table view
Route::get('/displaydata',[EventController::class,'show']);
//Route to delete event and show
Route::get('/deleteeventurl',[EventController::class,'show'] );

//EventController edit function route
Route::get('/event@edit/{id}',[EventController::class,'edit'] );
//EventController update function route
Route::put('/event@update/{id}',[EventController::class,'update'] );
//EventController destroy function route
Route::get('/event@destroy/{id}',[EventController::class,'destroy'] );
//EventController store function route
Route::post('/add',[EventController::class,'store'] );


//---------------------------- End---Event Calendar -Dhananjana Routes----------------------------------
//-----------------------------------------------------------------------------------------------





