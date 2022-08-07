<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
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
    return view('Home');
});

Route::controller(ViewController::class)->group(function () {
    Route::get('/Developers', 'DeveloperPage');
    Route::get('/Developers/AddDeveloper','AddDeveloperPage');
    Route::get('/Project', 'ProjectPage');
    Route::get('/Project/ViewProject','ViewProjectPage');
    Route::get('/Login','LoginPage');
    Route::get('/UnAuthorize','UnAuth');
});

Route::post('/SaveDeveloper',[DeveloperController::class,'SaveDeveloper'])->name('SaveNewDeveloper');
Route::post('/EditDeveloper',[DeveloperController::class,'EditDeveloper'])->name('EditDeveloper');
Route::get('/Developer/Remove/{id}',[DeveloperController::class,'RemoveDeveloper'])->name('RemoveDeveloper');
Route::get('Developers/ViewDeveloper/{Email}',[DeveloperController::class,'ViewDeveloper'])->name('ViewDeveloper');
Route::post('/AuthCheck',[DeveloperController::class,'AuthCheck'])->name('AdminAuth');
Route::get('/Logout',[DeveloperController::class,'Logout'])->name('AdminLogout');


Route::post('/SaveProject',[ProjectController::class,'SaveProject'])->name('SaveProjectDetails');
Route::post('/UpdateProject',[ProjectController::class,'UpdateProject'])->name('UpdateProject');
Route::get('/ShowProject/{slug}',[ProjectController::class,'ShowProject'])->name('FullProjectDetails');



Route::get('/TaskView',[TaskController::class,'TaskPage'])->name('ViewTasks');
Route::get('TaskView/AddTask',[TaskController::class,'AddTask'])->name('NewTaskAdd');
Route::post('SaveTask',[TaskController::class,'SaveTask'])->name('SaveNewTask');
Route::get('DoneTask/{id}',[TaskController::class,'DoneTask'])->name('DoneToTask');