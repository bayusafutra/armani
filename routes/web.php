<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArmaniController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\SukuAdatController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RumahAdatController;
use App\Http\Controllers\AboutAFterController;
use App\Http\Controllers\ForgotPassController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\AboutBeforeController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\MakananKhasController;
use App\Http\Controllers\PakaianAdatController;
use App\Http\Controllers\SignupAfterController;
use App\Http\Controllers\TarianDaerahController;
use App\Http\Controllers\SenjataDaerahController;
use App\Http\Controllers\ForgotPassAfterController;


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

Route::get('/', [ArmaniController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/signup', [SignupController::class, 'index']);

Route::get('/signup2', [SignupAfterController::class, 'index']);

Route::get('/Home', [HomeController::class, 'index'] );

Route::get('/about', [AboutBeforeController::class, 'index']);

Route::get('/About', [AboutAFterController::class, 'index']);

Route::get('/forgotpassword', [ForgotPassController::class, 'index']);

Route::get('/forgotpass', [ForgotPassAfterController::class, 'index']);

Route::get('provinsi/{slug}', [ProvinceController::class, 'show']);

Route::get('makanankhas/{slug}', [MakananKhasController::class, 'show']);

Route::get('/pakaianadat', [PakaianAdatController::class, 'index']);

Route::get('/rumahadat', [RumahAdatController::class, 'index']);

Route::get('/senjatadaerah', [SenjataDaerahController::class, 'index']);

Route::get('/sukuadat', [SukuAdatController::class, 'index']);

Route::get('/tarianadat', [TarianDaerahController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/editprofile', [EditProfileController::class, 'index']);

Route::get('/loginadmin', [LoginAdminController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/nyoba', function () {
    return view('nyoba');
});

