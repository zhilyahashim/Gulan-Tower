<?php

use App\Http\Controllers\NewsController;
use App\Models\Employee;
use App\Models\Employees;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [NewsController::class, 'welcome'])->name('welcome');
Route::get('/about', [NewsController::class, 'about'])->name('about');
Route::get('/contact', [NewsController::class, 'contact'])->name('contact');
Route::get('/events', [NewsController::class, 'events'])->name('events');
Route::get('/newss', [NewsController::class, 'newss'])->name('newss');
Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
Route::get('/search',[NewsController::class,'search']);
Route::get('news/process', [NewsController::class, 'process'])->middleware('auth');
Route::post('/user_post',[NewsController::class,'user_post'])->middleware('auth');
Route::get('/delete_post/{id}', [NewsController::class, 'delete_post'])->middleware('auth');
Route::get('/delete_event/{id}', [NewsController::class, 'delete_event'])->middleware('auth');
Route::post('/edit_post/{id}', [NewsController::class, 'edit_post'])->middleware('auth');
Route::post('/edit_event/{id}', [NewsController::class, 'edit_event'])->middleware('auth');
Route::get('news/logic', [NewsController::class, 'edetevent'])->name('news.editevent');
Route::get('news/editevent', [NewsController::class, 'logic'])->name('news.logic');
Route::get('/edit_post_page/{id}', [NewsController::class, 'edit_post_page'])->middleware('auth');
Route::get('/edit_event_page/{id}', [NewsController::class, 'edit_event_page'])->middleware('auth');
Route::get('news/Office', [NewsController::class, 'Office'])->name('news.Office');
Route::get('news/Event', [NewsController::class, 'Event'])->name('news.Event');
Route::post('/user_event', [NewsController::class, 'user_event'])->middleware('auth');
Route::get('news/Eventadd', [NewsController::class, 'Eventadd'])->middleware('auth');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

















