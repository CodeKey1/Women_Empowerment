<?php

use App\Http\Controllers\ProfileController;
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



Route::get('/', function () {return view('site.pages.index'); })->name('site');

Route::middleware('auth')->group(function () {
    Route::get('/profile_user', function () {return view('site.pages.dashboard'); })->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

///////////////////////////////////////////// front site ///////////////////////////////////////////

Route::group(['namespace'=> 'guest'],function (){
    Route::get('/about' ,[App\Http\Controllers\Site\AboutController::class,'index'])-> name('about');
    Route::get('/registration_project' ,[App\Http\Controllers\Site\RegistrationController::class,'index'])-> name('project.signup');
    Route::post('/project_store' ,[App\Http\Controllers\Site\RegistrationController::class,'store'])-> name('project.store');

});
///////////////////////////////////////////// Dashboard site ///////////////////////////////////////////

Route::middleware(['auth','admin'])->group(function (){
    Route::get('/dashboard' ,[App\Http\Controllers\Admin\AdminController::class,'index'])  -> name('dashboard');

});
