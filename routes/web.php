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

Route::get('/tst', function () {
    $owner_id = 47;
    return view('site.project_data_update');
});
Route::middleware('auth')->group(function () {
    //Route::get('/profile_user', function () {return view('site.pages.dashboard'); })->name('profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

///////////////////////////////////////////// front site Auth ///////////////////////////////////////////

Route::middleware(['auth'])->group(function () {
    //initial project creation
    Route::get('/add_project', [App\Http\Controllers\Site\RegistrationController::class, 'create'])->name('project.create');
    Route::post('/project_initial_store', [App\Http\Controllers\Site\RegistrationController::class, 'Initial_store'])->name('project.Initial_store');
    Route::post('/project_store{id}', [App\Http\Controllers\Site\RegistrationController::class, 'project_store'])->name('project.store');
    //remaning project data
    Route::get('/create_project{id}', [App\Http\Controllers\Site\RegistrationController::class, 'create_project'])->name('project.data');
    Route::post('/project_data_store{id}', [App\Http\Controllers\Site\RegistrationController::class, 'store'])->name('project.data.store');
    //data edit
    Route::get('/project_data_edit{id}', [App\Http\Controllers\Site\RegistrationController::class, 'edit_index'])->name('viewProject');
    Route::post('/project_edit_store{id}', [App\Http\Controllers\Site\RegistrationController::class, 'edit_store'])->name('project.edit.store');
    Route::post('/project_update{id}', [App\Http\Controllers\Site\RegistrationController::class, 'update'])->name('project.edit');
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
    Route::get('/namazeg-project_details{id}', [App\Http\Controllers\Site\PageController::class, 'namazeg_projectget'])->name('namazeg-project_details');
    Route::get('/women_guide', [App\Http\Controllers\Site\PageController::class, 'guide'])->name('guide');
    Route::get('/design_project', [App\Http\Controllers\Site\PageController::class, 'project_design'])->name('project_design');
    Route::get('/registration_project', [App\Http\Controllers\Site\RegistrationController::class, 'index'])->name('project.signup');
    Route::get('/training', [App\Http\Controllers\Site\PageController::class, 'training'])->name('training');
    Route::get('/news', [App\Http\Controllers\Site\PageController::class, 'news'])->name('news');
    Route::get('/news-details{id}', [App\Http\Controllers\Site\PageController::class, 'news_details'])->name('news.details');
    Route::get('/training-details{id}', [App\Http\Controllers\Site\PageController::class, 'training_details'])->name('training.details');
    Route::get('/success', [App\Http\Controllers\Site\PageController::class, 'successIndex'])->name('success');
    Route::get('/viewOwner', [App\Http\Controllers\Site\PageController::class, 'viewOwner'])->name('viewOwner');
});
///////////////////////////////////////////// Dashboard site ///////////////////////////////////////////

Route::middleware(['auth', 'admin'])->group(function () {
    //*************************************//
    //********dashboard view pages*********//
    //*************************************//
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminViewController::class, 'index'])->name('dashboard');
    Route::get('/dashboard-data', [App\Http\Controllers\Admin\AdminViewController::class, 'data'])->name('dashboard.data');
    Route::get('/dashboard-ershadat', [App\Http\Controllers\Admin\AdminViewController::class, 'ershadat'])->name('dashboard.ershadat');
    Route::get('/dashboard-mopadrat', [App\Http\Controllers\Admin\AdminViewController::class, 'mopadrat'])->name('dashboard.mopadrat');
    Route::get('/dashboard-news', [App\Http\Controllers\Admin\AdminViewController::class, 'news'])->name('dashboard.news');
    Route::get('/dashboard-projects-model', [App\Http\Controllers\Admin\AdminViewController::class, 'projects'])->name('dashboard.project.model');
    Route::get('/dashboard-courses', [App\Http\Controllers\Admin\AdminViewController::class, 'courses'])->name('dashboard.courses');
    Route::get('/dashboard-users', [App\Http\Controllers\Admin\AdminViewController::class, 'users'])->name('dashboard.users');
    Route::get('/dashboard-project-main{id}', [App\Http\Controllers\Admin\AdminViewController::class, 'projecs_view'])->name('dashboard.project.main');
    //*************************************//
    //********dashboard add pages**********//
    //*************************************//
    Route::get('/dashboard-data-add', [App\Http\Controllers\Admin\AdminAddController::class, 'data'])->name('dashboard.data.add');
    Route::get('/dashboard-ershadat-add', [App\Http\Controllers\Admin\AdminAddController::class, 'ershadat'])->name('dashboard.ershadat.add');
    Route::get('/dashboard-mopadrat-add', [App\Http\Controllers\Admin\AdminAddController::class, 'mopadrat'])->name('dashboard.mopadrat.add');
    Route::get('/dashboard-news-add', [App\Http\Controllers\Admin\AdminAddController::class, 'news'])->name('dashboard.news.add');
    Route::get('/dashboard-projects-model-add', [App\Http\Controllers\Admin\AdminAddController::class, 'projects'])->name('dashboard.project.model.add');
    Route::get('/dashboard-courses-add', [App\Http\Controllers\Admin\AdminAddController::class, 'courses'])->name('dashboard.courses.add');
    //*************************************//
    //******dashboard Store Function*******//
    //*************************************//
    Route::post('/dashboard-data-store', [App\Http\Controllers\Admin\AdminAddController::class, 'data_store'])->name('dashboard.data.store');
    Route::post('/dashboard-ershadat-store', [App\Http\Controllers\Admin\AdminAddController::class, 'ershadat_store'])->name('dashboard.ershadat.store');
    Route::post('/dashboard-mopadrat-store', [App\Http\Controllers\Admin\AdminAddController::class, 'mopadrat_store'])->name('dashboard.mopadrat.store');
    Route::post('/dashboard-news-store', [App\Http\Controllers\Admin\AdminAddController::class, 'news_store'])->name('dashboard.news.store');
    Route::post('/dashboard-projects-model-store', [App\Http\Controllers\Admin\AdminAddController::class, 'projects_store'])->name('dashboard.project.model.store');
    Route::post('/dashboard-courses-store', [App\Http\Controllers\Admin\AdminAddController::class, 'courses_store'])->name('dashboard.courses.store');
    //*************************************//
    //********dashboard edit pages*********//
    //*************************************//
    Route::get('/dashboard-data-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'data'])->name('dashboard.data.edit');
    Route::get('/dashboard-ershadat-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'ershadat'])->name('dashboard.ershadat.edit');
    Route::get('/dashboard-mopadrat-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'mopadrat'])->name('dashboard.mopadrat.edit');
    Route::get('/dashboard-news-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'news'])->name('dashboard.news.edit');
    Route::get('/dashboard-projects-model-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'projects'])->name('dashboard.project.model.edit');
    Route::get('/dashboard-courses-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'courses'])->name('dashboard.courses.edit');
    Route::get('/dashboard-users-edit{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'users'])->name('dashboard.users.edit');
    //*************************************//
    //******dashboard update Function******//
    //*************************************//
    Route::post('/dashboard-data-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'data_update'])->name('dashboard.data.update');
    Route::post('/dashboard-ershadat-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'ershadat_update'])->name('dashboard.ershadat.update');
    Route::post('/dashboard-mopadrat-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'mopadrat_update'])->name('dashboard.mopadrat.update');
    Route::post('/dashboard-news-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'news_update'])->name('dashboard.news.update');
    Route::post('/dashboard-projects-model-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'projects_update'])->name('dashboard.project.model.update');
    Route::post('/dashboard-courses-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'courses_update'])->name('dashboard.courses.update');
    Route::post('/dashboard-users-update{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'users_update'])->name('dashboard.users.update');
    //*************************************//
    //******dashboard Delete Function******//
    //*************************************//
    Route::get('/dashboard-data-delete{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'data_delete'])->name('dashboard.data.delete');
    Route::get('/dashboard-ershadat-delete{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'ershadat_delete'])->name('dashboard.ershadat.delete');
    Route::get('/dashboard-mopadrat-delete{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'mopadrat_delete'])->name('dashboard.mopadrat.delete');
    Route::get('/dashboard-news-delete{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'news_delete'])->name('dashboard.news.delete');
    Route::get('/dashboard-projects-model-delete{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'projects_delete'])->name('dashboard.project.model.delete');
    Route::get('/dashboard-courses-delete{id}', [App\Http\Controllers\Admin\AdminEditController::class, 'courses_delete'])->name('dashboard.courses.delete');

    //not configerd yet
    Route::get('/user_apply{id}', [App\Http\Controllers\Admin\ApplyController::class, 'show'])->name('admin.apply.show');
    Route::get('/users-edit{id}', [App\Http\Controllers\Admin\AdminController::class, 'users_edit'])->name('user.edit');
    Route::post('/users-update{id}', [App\Http\Controllers\Admin\AdminController::class, 'users_update'])->name('user.update');
    Route::get('/users-delete{id}', [App\Http\Controllers\Admin\AdminController::class, 'users_delete'])->name('user.delete');
    Route::get('/all_apply', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.apply');
});
