<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/ptt_crawler', [PageController::class, 'ptt_crawler']);

Route::post('/crawler_titles', [PageController::class, 'crawler_titles']);

Route::get('/todo_page', [PageController::class, 'todo_page']);

Route::get('/todos', [PageController::class, 'todos']);

Route::get('/todo/create', [PageController::class, 'todo_create']);

Route::get('/todo/edit/{id}', [PageController::class, 'todo_edit']);

Route::get('/assigners', [PageController::class, 'assigners']);

Route::get('/assigners_workload_list', [PageController::class, 'assigners_workload_list']);

Route::get('/assigner/create', [PageController::class, 'assigner_create']);

Route::get('/assigner/edit/{id}', [PageController::class, 'assigner_edit']);
