<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [ClothingController::class, 'store']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/dicas', function () {
    return view('dica');
});


Route::get('/dashboard', [ClothingController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/add/category', [CategoryController::class, 'create'])->middleware(['auth', 'verified']);
Route::get('/list/category', [CategoryController::class, 'getCategoryAll'])->middleware(['auth', 'verified']);
Route::post('/editar/category', [CategoryController::class, 'getCategory'])->middleware(['auth', 'verified']);
Route::post('/update/category', [CategoryController::class, 'updateCategory'])->middleware(['auth', 'verified']);
Route::post('/deletar/category', [CategoryController::class, 'deleteCategory'])->middleware(['auth', 'verified']);
Route::post('/search/category', [CategoryController::class, 'search'])->middleware(['auth', 'verified']);

Route::post('/add/collection', [CollectionController::class, 'create'])->middleware(['auth', 'verified']);
Route::get('/list/collection', [CollectionController::class, 'getCollectionAll'])->middleware(['auth', 'verified']);
Route::post('/editar/collection', [CollectionController::class, 'getCollection'])->middleware(['auth', 'verified']);
Route::post('/update/collection', [CollectionController::class, 'updateCollection'])->middleware(['auth', 'verified']);
Route::post('/deletar/collection', [CollectionController::class, 'deleteCollection'])->middleware(['auth', 'verified']);
Route::post('/search/collection', [CollectionController::class, 'search'])->middleware(['auth', 'verified']);

Route::post('/add/clothing', [ClothingController::class, 'create'])->middleware(['auth', 'verified']);
Route::get('/list/clothing', [ClothingController::class, 'getClothingAll'])->middleware(['auth', 'verified']);
Route::get('/produto/{id}', [ClothingController::class, 'getListClothing']);
Route::post('/editar/clothing', [ClothingController::class, 'getClothing'])->middleware(['auth', 'verified']);
Route::post('/update/clothing', [ClothingController::class, 'updateClothing'])->middleware(['auth', 'verified']);
Route::post('/deletar/clothing', [ClothingController::class, 'deleteClothing'])->middleware(['auth', 'verified']);
Route::post('/search/clothing', [ClothingController::class, 'search'])->middleware(['auth', 'verified']);

Route::post('/add/user', [UserController::class, 'create'])->middleware(['auth', 'verified']);
Route::get('/list/user', [UserController::class, 'getUserAll'])->middleware(['auth', 'verified']);
Route::post('/editar/user', [UserController::class, 'getUser'])->middleware(['auth', 'verified']);
Route::post('/update/user', [UserController::class, 'updateUser'])->middleware(['auth', 'verified']);
Route::post('/deletar/user', [UserController::class, 'deleteUser'])->middleware(['auth', 'verified']);
Route::post('/search/user', [UserController::class, 'search'])->middleware(['auth', 'verified']);

Route::get('/teste', [ClothingController::class, 'teste']);


require __DIR__.'/auth.php';
