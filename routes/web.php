<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArmaniController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\BelajarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegisterController;
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
use App\Http\Controllers\MakananAdminController;
use App\Http\Controllers\TarianDaerahController;
use App\Http\Controllers\ProvinsiAdminController;
use App\Http\Controllers\SenjataDaerahController;
use App\Http\Controllers\SukuAdatAdminController;
use App\Http\Controllers\CreateProvinsiController;
use App\Http\Controllers\RumahAdatAdminController;
use App\Http\Controllers\ForgotPassAfterController;
use App\Http\Controllers\TarianAdatAdminController;
use App\Http\Controllers\PakaianAdatAdminController;
use App\Http\Controllers\SenjataAdatAdminController;


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

Route::get('/test', [ArmaniController::class, 'kategori']);

Route::get('/', [ArmaniController::class, 'index']);

Route::get('/Home', [HomeController::class, 'index'] );

Route::get('provinsi/{slug}', [ProvinceController::class, 'show']);

Route::get('makanankhas/{slug}', [MakananKhasController::class, 'show']);

Route::get('/pakaianadat/{slug}', [PakaianAdatController::class, 'index']);

Route::get('/rumahadat/{slug}', [RumahAdatController::class, 'index']);

Route::get('/senjatadaerah/{slug}', [SenjataDaerahController::class, 'index']);

Route::get('/sukuadat/{slug}', [SukuAdatController::class, 'index']);

Route::get('/tarianadat/{slug}', [TarianDaerahController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/signup', [SignupController::class, 'index']);

Route::get('/signup2', [SignupAfterController::class, 'index']);

Route::get('/about', [AboutBeforeController::class, 'index']);

Route::get('/About', [AboutAFterController::class, 'index']);

Route::get('/forgotpassword', [ForgotPassController::class, 'index']);

Route::get('/forgotpass', [ForgotPassAfterController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/editprofile', [EditProfileController::class, 'index']);

Route::get('/loginadmin', [LoginAdminController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/nyoba', function () {
    return view('nyoba');
});

Route::get('/erga', function () {
    return view('simpenadmin');
});

Route::get('/test', [BelajarController::class, 'nyoba']);

Route::get('/gemoy', [HomeController::class, 'index3']);

Route::get('/delete', [HomeController::class, 'index2']);

Route::get('/ProvinceDelete', [ProvinceController::class, 'destroy']);

Route::post('/provinsiStore', [ProvinceController::class, 'store']);

///////////////ADMIN///////////////

Route::get('/provinsiadmin', [ProvinsiAdminController::class, 'index']);

Route::get('/createprovinsi', [ProvinsiAdminController::class, 'view']);

Route::post('/provinsicreate', [ProvinsiAdminController::class, 'store']);

Route::get('/viewprovinsi/{slug}', [ProvinsiAdminController::class, 'viewdetail']);

Route::post('/provinsiupdate', [ProvinsiAdminController::class, 'update']);

Route::get('/updateprovinsi/{slug}', [ProvinsiAdminController::class, 'viewupdate']);

Route::get('/provinsidelete', [ProvinsiAdminController::class, 'destroy']);



Route::get('/makananadmin', [MakananAdminController::class, 'index']);

Route::get('/createmakanan', [MakananAdminController::class, 'view']);

Route::post('/makanancreate', [MakananAdminController::class, 'store']);

Route::get('/viewmakanan/{slug}', [MakananAdminController::class, 'viewdetail']);

Route::post('/makananupdate', [MakananAdminController::class, 'update']);

Route::get('/updatemakanan/{slug}', [MakananAdminController::class, 'viewupdate']);

Route::get('/makanandelete', [MakananAdminController::class, 'destroy']);


Route::get('/sukuadatadmin', [SukuAdatAdminController::class, 'index']);

Route::get('/createsukuadat', [SukuAdatAdminController::class, 'view']);

Route::post('/sukuadatcreate', [SukuAdatAdminController::class, 'store']);

Route::get('/viewsukuadat/{slug}', [SukuAdatAdminController::class, 'viewdetail']);

Route::post('/sukuadatupdate', [SukuAdatAdminController::class, 'update']);

Route::get('/updatesukuadat/{slug}', [SukuAdatAdminController::class, 'viewupdate']);

Route::get('/sukuadatdelete', [SukuAdatAdminController::class, 'destroy']);


Route::get('/tarianadatadmin', [TarianAdatAdminController::class, 'index']);

Route::get('/createtarianadat', [TarianAdatAdminController::class, 'view']);

Route::post('/tarianadatcreate', [TarianAdatAdminController::class, 'store']);

Route::get('/viewtarianadat/{slug}', [TarianAdatAdminController::class, 'viewdetail']);

Route::post('/tarianadatupdate', [TarianAdatAdminController::class, 'update']);

Route::get('/updatetarianadat/{slug}', [TarianAdatAdminController::class, 'viewupdate']);

Route::get('/tarianadatdelete', [TarianAdatAdminController::class, 'destroy']);


Route::get('/rumahadatadmin', [RumahAdatAdminController::class, 'index']);

Route::get('/createrumahadat', [RumahAdatAdminController::class, 'view']);

Route::post('/rumahadatcreate', [RumahAdatAdminController::class, 'store']);

Route::get('/viewrumahadat/{slug}', [RumahAdatAdminController::class, 'viewdetail']);

Route::post('/rumahadatupdate', [RumahAdatAdminController::class, 'update']);

Route::get('/updaterumahadat/{slug}', [RumahAdatAdminController::class, 'viewupdate']);

Route::get('/rumahadatdelete', [RumahAdatAdminController::class, 'destroy']);


Route::get('/senjataadatadmin', [SenjataAdatAdminController::class, 'index']);

Route::get('/createsenjataadat', [SenjataAdatAdminController::class, 'view']);

Route::post('/senjataadatcreate', [SenjataAdatAdminController::class, 'store']);

Route::get('/viewsenjataadat/{slug}', [SenjataAdatAdminController::class, 'viewdetail']);

Route::post('/senjataadatupdate', [SenjataAdatAdminController::class, 'update']);

Route::get('/updatesenjataadat/{slug}', [SenjataAdatAdminController::class, 'viewupdate']);

Route::get('/senjataadatdelete', [SenjataAdatAdminController::class, 'destroy']);


Route::get('/pakaianadatadmin', [PakaianAdatAdminController::class, 'index']);

Route::get('/createpakaianadat', [PakaianAdatAdminController::class, 'view']);

Route::post('/pakaianadatcreate', [PakaianAdatAdminController::class, 'store']);

Route::get('/viewpakaianadat/{slug}', [PakaianAdatAdminController::class, 'viewdetail']);

Route::post('/pakaianadatupdate', [PakaianAdatAdminController::class, 'update']);

Route::get('/updatepakaianadat/{slug}', [PakaianAdatAdminController::class, 'viewupdate']);

Route::get('/pakaianadatdelete', [PakaianAdatAdminController::class, 'destroy']);


