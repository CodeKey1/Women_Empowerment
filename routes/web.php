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




Route::middleware('auth')->group(function () {
    //Route::get('/profile_user', function () {return view('site.pages.dashboard'); })->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

///////////////////////////////////////////// front site ///////////////////////////////////////////

Route::group(['namespace'=> 'guest'],function (){
    Route::get('/', [App\Http\Controllers\Site\PageController::class,'site'])->name('site');
    Route::get('/about' ,[App\Http\Controllers\Site\AboutController::class,'index'])-> name('about');
    Route::get('/stratgey' ,[App\Http\Controllers\Site\PageController::class,'index'])-> name('stratgey');
    Route::get('/instructions' ,[App\Http\Controllers\Site\PageController::class,'instructions'])-> name('instructions');
    Route::get('/initiatives' ,[App\Http\Controllers\Site\PageController::class,'initiatives'])-> name('initiatives');
    Route::get('/namazeg' ,[App\Http\Controllers\Site\PageController::class,'namazeg'])-> name('namazeg');
    Route::get('/women_guide' ,[App\Http\Controllers\Site\PageController::class,'guide'])-> name('guide');
    Route::get('/design_project' ,[App\Http\Controllers\Site\PageController::class,'project_design'])-> name('project_design');
    Route::get('/registration_project' ,[App\Http\Controllers\Site\RegistrationController::class,'index'])-> name('project.signup');
    Route::get('/add_project' ,[App\Http\Controllers\Site\RegistrationController::class,'create'])-> name('project.create');
    Route::post('/project_store' ,[App\Http\Controllers\Site\RegistrationController::class,'store'])-> name('project.store');

});
///////////////////////////////////////////// Dashboard site ///////////////////////////////////////////

Route::middleware(['auth','admin'])->group(function (){
    Route::get('/dashboard' ,[App\Http\Controllers\Admin\AdminController::class,'index'])  -> name('dashboard');
    Route::get('/profile_user' ,[App\Http\Controllers\Admin\ApplyController::class,'profile'])  -> name('profile');
    Route::get('/back' ,[App\Http\Controllers\Admin\AdminController::class,'back'])  -> name('back');
    Route::get('/all_apply' ,[App\Http\Controllers\Admin\ApplyController::class,'index'])  -> name('admin.apply');
    Route::get('/mopadra' ,[App\Http\Controllers\Admin\ApplyController::class,'mopdara'])  -> name('admin.mopdara');
    Route::get('/user_apply{id}' ,[App\Http\Controllers\Admin\ApplyController::class,'show'])  -> name('admin.apply.show');

});
