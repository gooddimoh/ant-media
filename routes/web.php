<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\FrontController::class, 'index'])->name('index');

Route::get('/videostream/create2/', [App\Http\Controllers\VideoStreamController::class, 'action_videostreamcreate'])->name('videostreamcreate');
Route::post('/videostream/create/', [App\Http\Controllers\VideoStreamController::class, 'action_videostreamcreate'])->name('videostreamcreate');
Route::get('/videostream/creates/', [App\Http\Controllers\VideoStreamController::class, 'action_createvideostream2'])->name('createvideostream');
Route::get('/videostream/create/{streamid}/', [App\Http\Controllers\VideoStreamController::class, 'action_createvideostream2'])->name('createvideostream');
Route::get('/videostream/add/{streamid}/', [App\Http\Controllers\VideoStreamController::class, 'action_createvideostream2'])->name('createvideostream');

Route::get('/listofcaptions', [App\Http\Controllers\VideoStreamController::class, 'action_listofcaptions'])->name('listofcaptions');
Route::get('/streams/createvideostream', [App\Http\Controllers\VideoStreamController::class, 'action_createlivestream'])->name('CreateVideoStream');
Route::get('/streams/show', [App\Http\Controllers\VideoStreamController::class, 'action_showallstreams'])->name('ShowAllStreams');
Route::get('/video/stream/show', [App\Http\Controllers\VideoStreamController::class, 'action_showallstreams'])->name('showVideoStream');
Route::get('/video/stream/hide', [App\Http\Controllers\VideoStreamController::class, 'action_addvideostream'])->name('AddVideoStream');

