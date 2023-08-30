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

require __DIR__ . '/auth.php';

///////////////////////////////////////////// front site Auth ///////////////////////////////////////////

Route::middleware(['auth'])->group(function () {

    Route::get('/add_project', [App\Http\Controllers\Site\RegistrationController::class, 'create'])->name('project.create');
    Route::post('/project_store', [App\Http\Controllers\Site\RegistrationController::class, 'store'])->name('project.store');
});

///////////////////////////////////////////// front site ///////////////////////////////////////////

Route::group(['namespace' => 'guest'], function () {
    Route::get('/', [App\Http\Controllers\Site\PageController::class, 'site'])->name('site');
    Route::get('/profile_user', [App\Http\Controllers\Admin\ApplyController::class, 'profile'])->name('profile');
    Route::get('/about', [App\Http\Controllers\Site\AboutController::class, 'index'])->name('about');
    Route::get('/stratgey', [App\Http\Controllers\Site\PageController::class, 'index'])->name('stratgey');
    Route::get('/opendata', [App\Http\Controllers\Site\PageController::class, 'Data'])->name('Data');
    Route::get('/instructions', [App\Http\Controllers\Site\PageController::class, 'instructions'])->name('instructions');
    Route::get('/initiatives', [App\Http\Controllers\Site\PageController::class, 'initiatives'])->name('initiatives');
    Route::get('/namazeg', [App\Http\Controllers\Site\PageController::class, 'namazeg'])->name('namazeg');
    Route::get('/namazeg-project', [App\Http\Controllers\Site\PageController::class, 'namazeg_project'])->name('namazeg-project');
    Route::get('/women_guide', [App\Http\Controllers\Site\PageController::class, 'guide'])->name('guide');
    Route::get('/design_project', [App\Http\Controllers\Site\PageController::class, 'project_design'])->name('project_design');
    Route::get('/registration_project', [App\Http\Controllers\Site\RegistrationController::class, 'index'])->name('project.signup');
    Route::get('/training', [App\Http\Controllers\Site\PageController::class, 'training'])->name('training');
    Route::get('/training-details{id}', [App\Http\Controllers\Site\PageController::class, 'training_details'])->name('training.details');
    Route::get('/success', [App\Http\Controllers\Site\PageController::class, 'successIndex'])->name('success');
    Route::get('/viewProject', [App\Http\Controllers\Site\PageController::class, 'viewProject'])->name('viewProject');
});
///////////////////////////////////////////// Dashboard site ///////////////////////////////////////////

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
    Route::get('/back', [App\Http\Controllers\Admin\AdminController::class, 'back'])->name('back');
    Route::get('/all_apply', [App\Http\Controllers\Admin\ApplyController::class, 'index'])->name('admin.apply');
    Route::get('/mopadra', [App\Http\Controllers\Admin\ApplyController::class, 'mopdara'])->name('admin.mopdara');
    Route::get('/n-project', [App\Http\Controllers\Admin\AdminController::class, 'old_project'])->name('admin.oldproject');
    Route::get('/courses', [App\Http\Controllers\Admin\AdminController::class, 'courses'])->name('admin.courses');
    Route::get('/courses_create', [App\Http\Controllers\Admin\AdminController::class, 'coursescreate'])->name('admin.courses.create');
    Route::post('/courses_store', [App\Http\Controllers\Admin\AdminController::class, 'courses_store'])->name('admin.courses.store');
    Route::get('/courses_delete{id}', [App\Http\Controllers\Admin\AdminController::class, 'courseDelete'])->name('admin.courses.delete');
    Route::get('/n-project-create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('admin.oldproject.create');
    Route::post('/n-project-store', [App\Http\Controllers\Admin\AdminController::class, 'store'])->name('admin.oldproject.store');
    Route::get('/n-project-delete{id}', [App\Http\Controllers\Admin\AdminController::class, 'projectDelete'])->name('admin.oldproject.delete');
    Route::get('/user_apply{id}', [App\Http\Controllers\Admin\ApplyController::class, 'show'])->name('admin.apply.show');
    Route::get('/opendataa', [App\Http\Controllers\Admin\DataController::class, 'index'])->name('admin.data');
    Route::get('/opendata_create', [App\Http\Controllers\Admin\DataController::class, 'create'])->name('admin.data.create');
    Route::post('/opendata_store', [App\Http\Controllers\Admin\DataController::class, 'store'])->name('admin.data.store');
    Route::get('/opendata_delete{id}', [App\Http\Controllers\Admin\DataController::class, 'destroy'])->name('admin.data.delete');

});
