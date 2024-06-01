<?php

use App\Http\Controllers\ClinicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\Growt_ChartController;

use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'register'])->name('registration');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('registration.post');

Route::middleware(['auth'])->group(function () {
    Route::get('Admin/index', [AuthController::class, 'home'])->name('home')->middleware('preventBackHistory'); // Apply the custom middleware.
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('store-clinic', [ClinicController::class, 'create'])->name('store-clinic');
    Route::get('create-clinics', [ClinicController::class, 'index'])->name('create-clinics');
});

Route::get('/create', function () {
    return view('Auth/midreg');
});


Route::get('/midlogin', function () {
    return view('Auth/midlogin');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/contcat', function () {
    return view('contcat');
});
Route::get('/Layout', function () {
    return view('Layout');
});
Route::get('/side', function () {
    return view('side');
});
Route::resource("/employee", EmployeeController::class);

Route::get('/tet', function () {
    return view('tet');
});

Route::get('/dashboard', function () {
    return view('Admin/dashboard');
});

Route::get('/event', function () {
    return view('event');
});



Route::resource("/baby", BabyController::class);
Route::resource("/vaccine", VaccineController::class);
Route::resource("/grow", Growt_ChartController::class);

Route::get('/contact', function () {
    return view('contcat');
});

Route::get('/vacc', function () {
    return view('user/vacc');
});
Route::get('/slide', function () {
    return view('slide');
});

Route::get('/mychild', function () {
    return view('user/mychild');
});

Route::get('/cal', function () {
    return view('calender');
});


Route::get('/user', function () {
    return view('user/user');
});

Route::get('/chart', function () {
    return view('user/Chart');
});


Route::get('/pro', function () {
    return view('profile/edit');
});

Route::resource('posts', PostController::class);


Route::get('/tasks', [ClinicController::class, 'listTasks'])->name('tasks.index');
Route::get('/tasks/edit/{id}', [ClinicController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/update/{id}', [ClinicController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/delete/{id}', [ClinicController::class, 'destroy'])->name('tasks.destroy');
