<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
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


Route::get('/', [NavController::class, 'home']);

//********************Characters*****************************

Route::get('/characters', [NavController::class, 'characters']);

//add character

Route::get('/addCharacter', [NavController::class, 'addCharacter']);

Route::post('/addCharacter', [ActionController::class, 'add_character']);


//delete character
Route::post('/deleteCharacter', [ActionController::class, 'deleteCharacter']);
// modify character

Route::post('/modifyCharacter', [NavController::class, 'modifyCharacter']);
Route::post('/editCharacter', [ActionController::class,'editCharacter']);


//********************Illustrators******************************

Route::get('/illustrators', [NavController::class, 'illustrators']);

//add illustrator

Route::get('/addIllustrator', [NavController::class, 'addIllustrator']);

Route::post('/addIllustrator', [ActionController::class, 'add_illustrator']);

//delete illustrator
Route::post('/deleteIllustrator', [ActionController::class, 'deleteIllustrator']);

