<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('layout');
});



Route::middleware('is_login')->group(function(){




    //Create : Book
    Route::get('/books/create',[BookController::class , 'create'])->name('books.create');
    Route::post('/books/store',[BookController::class , 'store'])->name('books.store');


    //Edit Book
    Route::get('/books/edit/{id}' , [BookController::class,'edit'])->name('books.edit');
    Route::post('/books/update/{id}' , [BookController::class,'update'])->name('books.update');


    //Create : Category
    Route::get('/categories/create',[CategoryController::class , 'create'])->name('categories.create');
    Route::post('/categories/store',[CategoryController::class , 'store'])->name('categories.store');

    //Edit Category
    Route::get('/categories/edit/{id}' , [CategoryController::class,'edit'])->name('categories.edit');
    Route::post('/categories/update/{id}' , [CategoryController::class,'update'])->name('categories.update');



    // logout Route
    Route::get('logout' , [AuthController::class , 'logout'])->name('auth.logout');

    //Notes Route
    Route::get('/notes/create',[NoteController::class , 'create'])->name('notes.create');
    Route::post('/notes/store',[NoteController::class , 'store'])->name('notes.store');


});

    // Book:read
    Route::get('/books' , [BookController::class , 'index' ])->name('books.index') ;
    Route::get('/books/show/{id}',[BookController::class,'show'])->name('books.show');



    // Category:read
    Route::get('/categories' , [CategoryController::class , 'index' ])->name('categories.index') ;
    Route::get('/categories/show/{id}',[CategoryController::class,'show'])->name('categories.show');



Route::middleware('is_guest')->group(function(){

    //Register Route
    Route::get('register' , [AuthController::class , 'register'])->name('auth.register');
    Route::post('handle-register' , [AuthController::class , 'handleRegister'])->name('auth.handleRegister');


    // Login Route
    Route::get('login' , [AuthController::class , 'login'])->name('auth.login');
    Route::post('handle-login' , [AuthController::class , 'handleLogin'])->name('auth.handleLogin');


});


Route::middleware('isLoginAdmin')->group(function(){


    //Delete Category
    Route::get('/categories/delete/{id}' , [CategoryController::class,'delete'])->name('categories.delete');


    //Delete Book
    Route::get('/books/delete/{id}' , [BookController::class,'delete'])->name('books.delete');


});



