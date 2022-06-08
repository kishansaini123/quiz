<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\QuestionController;

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
    return view('frontend.index');
})->name('homepage');


Route::middleware('auth')->group(function() {
	Route::prefix('admin')->group(function() {
Route::resource('question',QuestionController::class);
		// Route::get('/question',[QuestionController::class,'index'])->name('question.index');
		// Route::post('/question', [QuestionController::class, 'store']);
		// Route::get('/questiondisplay',[QuestionController::class,'show']);
		// Route::get('/delete/{id}',[QuestionController::class,'delete']);

		Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
		Route::post('/subject', [SubjectController::class, 'store'])->name('subject.store');
		Route::get('/subject',[SubjectController::class,'show'])->name('subject.show');
		Route::get('/delete/{id}',[SubjectController::class,'destroy']);
		Route::get('/subjectedit/{id}',[SubjectController::class,'showdata'])->name('subjectedit');
		Route::post('subjectedit/{id}',[SubjectController::class,'update']);

		Route::view('/user-attendances', 'backend/attendances/user-attendances')->name('attendances');
		Route::view('/profile', 'backend/account/profile')->name('admin.profile');
		Route::view('/blogs', 'backend/blogs/index')->name('admin.blogs');
		Route::view('/categories', 'backend/categories/index')->name('admin.categories');
		Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
		Route::view('/dashboard', 'backend/dashboard')->name('dashboard');
		Route::name('admin.')->middleware(['auth.admin'])->group(function () {
			Route::view('/users', 'backend/users/index')->name('users');
			Route::view('/roles', 'backend/roles/index')->name('roles');
			Route::view('/departments', 'backend/departments/index')->name('departments');
			Route::view('/attendances', 'backend/attendances/index')->name('attendances');

			
		});
		Route::fallback(function() {
			return view('backend/errors.404');
		});
	});
});



Route::view('/about-us', 'frontend/about')->name('about');
// Route::view('/how-we-work', 'frontend/works')->name('works');
Route::view('/careers', 'frontend/careers')->name('careers');
Route::view('/our-team', 'frontend/teams')->name('teams');
Route::view('/mission-vision', 'frontend/vision')->name('vision');
// Route::view('/our-value', 'frontend/value')->name('value');
Route::view('/service', 'frontend/service')->name('service');
// Route::view('/service-detail', 'frontend/service-detail')->name('service.show');
Route::view('/contact', 'frontend/contact')->name('contact');
// Route::view('/career', 'frontend/career')->name('career');
// Route::view('/blog', 'frontend/blog')->name('blog');
// Route::view('/blog-detail', 'frontend/blog-detail')->name('blog.show');
// Route::view('/faq', 'frontend/faq')->name('faq');

Auth::routes();
