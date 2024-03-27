<?php

/* use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController; */
use App\Http\Controllers\ContentController;
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

/* Route::get('/', [ContentController::class,'index']);
Route::get('/work', [ContentController::class,'work']);
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/work', function () {
    return view('work');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/detail-work', function () {
    return view('detail-work');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard-admin', function () {
    return view('dashboard-admin');
});

Route::get('/edit-admin', function () {
    return view('edit-admin');
});
Route::get('/project', function () {
    return view('project');
});

Route::get('/upload-project', function () {
    return view('upload-project');
});

Route::get('/tambah-admin', function () {
    return view('tambah-admin');
});

/* Route::get('/userAdmin',[AdminController::class,'index']);
Route::get('/userAdmin/create',[AdminController::class,'create']);
Route::post('/userAdmin/store',[AdminController::class,'store']);
Route::get('/userAdmin/{user_id}/edit',[AdminController::class,'edit']);
Route::put('/userAdmin/{user_id}',[AdminController::class,'update']);
Route::delete('/userAdmin/delete/{user_id}',[AdminController::class,'destroy']);
Route::get('/listproject',[ProjectController::class,'index']);
Route::get('/listContent',[ContentController::class,'index']); */
