<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\Rtl;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;
use App\Models\Article;
use App\Models\Slider;
use App\Models\Team;
use App\Models\Testimoni;
use Illuminate\Http\Request;

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

Route::get('/', function(){
    $sliders = Slider::get();
    $articles = Article::orderByRaw('created_at DESC')->paginate(3);
    $teams = Team::get();
    $testimonies = Testimoni::get();
    $count_testimoni = $testimonies->count();;
    return view('welcome', compact('sliders', 'articles', 'teams', 'testimonies', 'count_testimoni'));
})->name('welcome');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');
 
Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => ['cek_login:Admin']], function () {
        // Users
        Route::get('/users', [UserController::class, 'index'])->name('users');
        Route::get('/users/fetchall', [UserController::class, 'fetchAll'])->name('fetchAll_user');
        Route::post('/users/store', [UserController::class, 'store'])->name('store_user');
        Route::get('/users/edit', [UserController::class, 'edit'])->name('edit_user');
        Route::post('/users/update', [UserController::class, 'update'])->name('update_user');
        Route::delete('/users/delete', [UserController::class, 'destroy'])->name('delete_user');
        // Sliders
        Route::get('/sliders', [SliderController::class, 'index'])->name('sliders');
        Route::get('/sliders/fetchall', [SliderController::class, 'fetchAll'])->name('fetchAll_slider');
        Route::post('/sliders/store', [SliderController::class, 'store'])->name('store_slider');
        Route::get('/sliders/edit', [SliderController::class, 'edit'])->name('edit_slider');
        Route::post('/sliders/update', [SliderController::class, 'update'])->name('update_slider');
        Route::delete('/sliders/delete', [SliderController::class, 'destroy'])->name('delete_slider');
        // Articles
        Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
        Route::get('/article', [ArticleController::class, 'index_landing_page'])->name('articles_landing_page');
        Route::get('/article/{slug}', [ArticleController::class, 'show']);
        Route::get('/articles/fetchall', [ArticleController::class, 'fetchAll'])->name('fetchAll_article');
        Route::post('/articles/store', [ArticleController::class, 'store'])->name('store_article');
        Route::get('/articles/edit', [ArticleController::class, 'edit'])->name('edit_article');
        Route::post('/articles/update', [ArticleController::class, 'update'])->name('update_article');
        Route::delete('/articles/delete', [ArticleController::class, 'destroy'])->name('delete_article');
        //Teams
        Route::get('/teams', [TeamController::class, 'index'])->name('teams');
        Route::get('/teams/fetchall', [TeamController::class, 'fetchAll'])->name('fetchAll_team');
        Route::post('/teams/store', [TeamController::class, 'store'])->name('store_team');
        Route::get('/teams/edit', [TeamController::class, 'edit'])->name('edit_team');
        Route::post('/teams/update', [TeamController::class, 'update'])->name('update_team');
        Route::delete('/teams/delete', [TeamController::class, 'destroy'])->name('delete_team');
        //Testimoni
        Route::get('/testimonies', [TestimoniController::class, 'index'])->name('testimonies');
        Route::get('/testimonies/fetchall', [TestimoniController::class, 'fetchAll'])->name('fetchAll_testimoni');
        Route::post('/testimonies/store', [TestimoniController::class, 'store'])->name('store_testimoni');
        Route::get('/testimonies/edit', [TestimoniController::class, 'edit'])->name('edit_testimoni');
        Route::post('/testimonies/update', [TestimoniController::class, 'update'])->name('update_testimoni');
        Route::delete('/testimonies/delete', [TestimoniController::class, 'destroy'])->name('delete_testimoni');
    });
    // Route::get('/billing', Billing::class)->name('billing');
    // Route::get('/profile', Profile::class)->name('profile');
    // Route::get('/tables', Tables::class)->name('tables');
    // Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    // Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    // Route::get('/rtl', Rtl::class)->name('rtl');
    // Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    // Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

