<?php

/* use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController; */

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SessionController;
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


/* Route::get('/work', [ContentController::class,'work']);
 */

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Route::get('/work', function () {
    return view('work');
});

 */
/* Route::get('/detail-work', function () {
    return view('detail-work');
}); */

/* 



Route::get('/edit-admin', function () {
    return view('edit-admin');
});
Route::get('/admin/project', function () {
    return view('admin.project');
});

 */

/* Admin */
Route::get('/admin/kelola-admin/{user_id}/edit',[AdminController::class,'edit']);
Route::put('/admin/kelola-admin/{user_id}',[AdminController::class,'update']);
Route::get('/admin/kelola-admin', [AdminController::class,'kelola']);
Route::get('/admin/kelola-admin/create',[AdminController::class,'create']);
Route::get('/admin/kelola-admin/store',[AdminController::class,'store']);
Route::get('/admin/kelola-admin/{user_id}/delete',[AdminController::class,'delete']);
Route::get('/admin/upload_project',[ProjectController::class,'uploadProject']);
Route::get('/admin/project',[ProjectController::class,'listProject']);
Route::get('/admin/project/{id}/status',[ProjectController::class,'updateStatus']);
Route::post('/admin/upload-project/store',[ProjectController::class,'uploadProject']);
Route::post('/admin/upload-content/{project_name}/upload',[ProjectController::class,'upload']);
Route::get('/admin/project/{project_id}/delete',[ProjectController::class,'delete']);
Route::get('/admin/project/video',[ProjectController::class,'projectVideo']);
Route::get('/admin/upload-project/video',[ProjectController::class,'uploadVideo']);
Route::post('/admin/upload-project/video/store',[ProjectController::class,'storeVideo']);
Route::get('/admin/project/delete/video/{project_id}',[ProjectController::class,'deleteVideo']);
Route::get('/admin/upload-project', function () {
    return view('admin.upload-project');
});

/* content */
Route::get('/about', function () {
    return view('about');
});
Route::get('/', [ContentController::class,'index']);
Route::get('/detail-work/{project_name}/view',[ContentController::class,'detailWork']);
Route::get('/work',[ContentController::class,'work']);
Route::get('/detail-work/video/{project_id}/view',[ContentController::class,'detailVideo']);


/* Session */
Route::get('/admin/dashboard-admin', [AdminController::class,'dashboard']);
Route::get('/login', [SessionController::class,'index']);
Route::post('/sesi/login',[SessionController::class,'login']);
Route::get('/sesi/logout',[SessionController::class,'logout']);

/* Route::get('/userAdmin',[AdminController::class,'index']);
Route::get('/userAdmin/create',[AdminController::class,'create']);
Route::post('/userAdmin/store',[AdminController::class,'store']);
Route::get('/userAdmin/{user_id}/edit',[AdminController::class,'edit']);
Route::put('/userAdmin/{user_id}',[AdminController::class,'update']);
Route::delete('/userAdmin/delete/{user_id}',[AdminController::class,'destroy']);
Route::get('/listproject',[ProjectController::class,'index']);
Route::get('/listContent',[ContentController::class,'index']); */
