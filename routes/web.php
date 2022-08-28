<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/members', [App\Http\Controllers\HomeController::class, 'members'])->name('about');
Route::get('/team', [App\Http\Controllers\HomeController::class, 'team'])->name('team');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');


Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'login_get'])->name('login_get');
Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'login'])->name('login');

Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_dashboard');

    Route::get('/members', [App\Http\Controllers\MemberController::class, 'index'])->name('members');
    Route::get('/member_add', [App\Http\Controllers\MemberController::class, 'add'])->name('member_add');

    Route::get('/member_edit/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('member_edit');
    Route::get('/member_delete/{id}', [App\Http\Controllers\MemberController::class, 'delete'])->name('member_delete');

    Route::post('/member_update', [App\Http\Controllers\MemberController::class, 'update'])->name('member_update');

    Route::get('/events', [App\Http\Controllers\EventController::class, 'index'])->name('events');
    Route::get('/event_add', [App\Http\Controllers\EventController::class, 'add'])->name('event_add');
    Route::get('/event_edit/{id}', [App\Http\Controllers\EventController::class, 'edit'])->name('event_edit');
    Route::get('/event_delete/{id}', [App\Http\Controllers\EventController::class, 'delete'])->name('event_delete');
    Route::post('/event_store', [App\Http\Controllers\EventController::class, 'store'])->name('event_store');
    Route::post('/event_update', [App\Http\Controllers\EventController::class, 'update'])->name('event_update');


    Route::get('/peoples', [App\Http\Controllers\PeopleController::class, 'index'])->name('peoples');
    Route::get('/people_add', [App\Http\Controllers\PeopleController::class, 'add'])->name('people_add');
    Route::get('/people_edit/{id}', [App\Http\Controllers\PeopleController::class, 'edit'])->name('people_edit');
    Route::get('/people_delete/{id}', [App\Http\Controllers\PeopleController::class, 'delete'])->name('people_delete');;
    Route::post('/people_update', [App\Http\Controllers\PeopleController::class, 'update'])->name('people_update');

    Route::get('/panchayats', [App\Http\Controllers\PanchayatController::class, 'index'])->name('panchayats');
    Route::get('/panchayat_add', [App\Http\Controllers\PanchayatController::class, 'add'])->name('panchayat_add');
    Route::get('/panchayat_edit/{id}', [App\Http\Controllers\PanchayatController::class, 'edit'])->name('panchayat_edit');
    Route::get('/panchayat_delete/{id}', [App\Http\Controllers\PanchayatController::class, 'delete'])->name('panchayat_delete');
    Route::post('/panchayat_store', [App\Http\Controllers\PanchayatController::class, 'store'])->name('panchayat_store');
    Route::post('/panchayat_update', [App\Http\Controllers\PanchayatController::class, 'update'])->name('panchayat_update');

    Route::get('/certificates', [App\Http\Controllers\CertificateController::class, 'index'])->name('certificates');
    Route::get('/certificate_add', [App\Http\Controllers\CertificateController::class, 'add'])->name('certificate_add');
    Route::get('/certificate_edit/{id}', [App\Http\Controllers\CertificateController::class, 'edit'])->name('certificate_edit');
    Route::get('/certificate_delete/{id}', [App\Http\Controllers\CertificateController::class, 'delete'])->name('certificate_delete');
    Route::post('/certificate_store', [App\Http\Controllers\CertificateController::class, 'store'])->name('certificate_store');
    Route::post('/certificate_update', [App\Http\Controllers\CertificateController::class, 'update'])->name('certificate_update');


    Route::get('/voluntiers', [App\Http\Controllers\VoluntierController::class, 'index'])->name('voluntiers');
    Route::get('/voluntier_add', [App\Http\Controllers\VoluntierController::class, 'add'])->name('voluntier_add');
    Route::get('/voluntier_edit/{id}', [App\Http\Controllers\VoluntierController::class, 'edit'])->name('voluntier_edit');
    Route::get('/voluntier_delete/{id}', [App\Http\Controllers\VoluntierController::class, 'delete'])->name('voluntier_delete');
    Route::post('/voluntier_store', [App\Http\Controllers\VoluntierController::class, 'store'])->name('voluntier_store');
    Route::post('/voluntier_update', [App\Http\Controllers\VoluntierController::class, 'update'])->name('voluntier_update');


    Route::get('/positions', [App\Http\Controllers\PositionController::class, 'index'])->name('positions');
    Route::get('/position_add', [App\Http\Controllers\PositionController::class, 'add'])->name('position_add');
    Route::get('/position_edit/{id}', [App\Http\Controllers\PositionController::class, 'edit'])->name('position_edit');
    Route::get('/position_delete/{id}', [App\Http\Controllers\PositionController::class, 'delete'])->name('position_delete');
    Route::post('/position_store', [App\Http\Controllers\PositionController::class, 'store'])->name('position_store');
    Route::post('/position_update', [App\Http\Controllers\PositionController::class, 'update'])->name('position_update');

    Route::get('/parliaments', [App\Http\Controllers\ParliamentController::class, 'index'])->name('parliaments');
    Route::get('/parliament_add', [App\Http\Controllers\ParliamentController::class, 'add'])->name('parliament_add');
    Route::get('/parliament_edit/{id}', [App\Http\Controllers\ParliamentController::class, 'edit'])->name('parliament_edit');
    Route::get('/parliament_delete/{id}', [App\Http\Controllers\ParliamentController::class, 'delete'])->name('parliament_delete');
    Route::post('/parliament_store', [App\Http\Controllers\ParliamentController::class, 'store'])->name('parliament_store');
    Route::post('/parliament_update', [App\Http\Controllers\ParliamentController::class, 'update'])->name('parliament_update');

    Route::get('/settings', [App\Http\Controllers\SettingController::class, 'index'])->name('settings');
    Route::get('/setting_add', [App\Http\Controllers\SettingController::class, 'add'])->name('setting_add');
    Route::get('/setting_edit/{id}', [App\Http\Controllers\SettingController::class, 'edit'])->name('setting_edit');
    Route::get('/setting_delete/{id}', [App\Http\Controllers\SettingController::class, 'delete'])->name('setting_delete');
    Route::post('/setting_store', [App\Http\Controllers\SettingController::class, 'store'])->name('setting_store');
    Route::post('/setting_update', [App\Http\Controllers\SettingController::class, 'update'])->name('setting_update');

    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
    Route::post('/profile_update', [App\Http\Controllers\AdminController::class, 'profile_update'])->name('profile_update');
});
Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');


// Auth::routes();
Route::post('/admin/people_store', [App\Http\Controllers\PeopleController::class, 'store'])->name('people_store');
Route::get('/register', [App\Http\Controllers\MemberController::class, 'register'])->name('member_register');
Route::post('/otp', [App\Http\Controllers\HomeController::class, 'otp'])->name('otp');

Route::post('/admin/member_store', [App\Http\Controllers\MemberController::class, 'store'])->name('member_store');

Route::get('/login', [App\Http\Controllers\MemberController::class, 'login'])->name('member_login');
Route::post('/login', [App\Http\Controllers\MemberController::class, 'login_post'])->name('member_login_post');
Route::get('/panchayat_samiti', [App\Http\Controllers\MemberController::class, 'panchayat_samiti'])->name('panchayat_samiti');
Route::post('/panchayat_samiti', [App\Http\Controllers\MemberController::class, 'panchayat_samiti_post'])->name('panchayat_samiti_post');
Route::get('/panchayat_samiti_edit/{id}', [App\Http\Controllers\MemberController::class, 'panchayat_samiti_edit'])->name('panchayat_samiti_edit');


Route::post('/get_assembly', [App\Http\Controllers\MemberController::class, 'get_assembly'])->name('get_assembly');
Route::post('/get_mandal', [App\Http\Controllers\MemberController::class, 'get_mandal'])->name('get_mandal');
