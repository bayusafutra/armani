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

Route::get('/', [HomeController::class, 'index'] );

Route::get('provinsi/{slug}', [ProvinceController::class, 'show'])->middleware('auth');

Route::get('makanankhas/{slug}', [MakananKhasController::class, 'show'])->middleware('auth');

Route::get('/pakaianadat/{slug}', [PakaianAdatController::class, 'index'])->middleware('auth');

Route::get('/rumahadat/{slug}', [RumahAdatController::class, 'index'])->middleware('auth');

Route::get('/senjatadaerah/{slug}', [SenjataDaerahController::class, 'index'])->middleware('auth');

Route::get('/sukuadat/{slug}', [SukuAdatController::class, 'index'])->middleware('auth');

Route::get('/tarianadat/{slug}', [TarianDaerahController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::get('/About', [AboutAFterController::class, 'index']);

Route::get('/forgotpassword', [ForgotPassController::class, 'index']);

Route::get('/forgotpass', [ForgotPassAfterController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::get('/editprofile', [ProfileController::class, 'edit'])->middleware('auth');
Route::post('/editprofile', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/loginadmin', [LoginAdminController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

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

Route::get('/provinsiadmin', [ProvinsiAdminController::class, 'index'])->middleware('auth');

Route::get('/createprovinsi', [ProvinsiAdminController::class, 'view'])->middleware('auth');

Route::post('/provinsicreate', [ProvinsiAdminController::class, 'store'])->middleware('auth');

Route::get('/viewprovinsi/{slug}', [ProvinsiAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/provinsiupdate', [ProvinsiAdminController::class, 'update'])->middleware('auth');

Route::get('/updateprovinsi/{slug}', [ProvinsiAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/provinsidelete', [ProvinsiAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslug', [ProvinsiAdminController::class, 'checkSlug'])->middleware('auth');



Route::get('/makananadmin', [MakananAdminController::class, 'index'])->middleware('auth');

Route::get('/createmakanan', [MakananAdminController::class, 'view'])->middleware('auth');

Route::post('/makanancreate', [MakananAdminController::class, 'store'])->middleware('auth');

Route::get('/viewmakanan/{slug}', [MakananAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/makananupdate', [MakananAdminController::class, 'update'])->middleware('auth');

Route::get('/updatemakanan/{slug}', [MakananAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/makanandelete', [MakananAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslugmakanan', [MakananAdminController::class, 'checkSlug'])->middleware('auth');



Route::get('/sukuadatadmin', [SukuAdatAdminController::class, 'index'])->middleware('auth');

Route::get('/createsukuadat', [SukuAdatAdminController::class, 'view'])->middleware('auth');

Route::post('/sukuadatcreate', [SukuAdatAdminController::class, 'store'])->middleware('auth');

Route::get('/viewsukuadat/{slug}', [SukuAdatAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/sukuadatupdate', [SukuAdatAdminController::class, 'update'])->middleware('auth');

Route::get('/updatesukuadat/{slug}', [SukuAdatAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/sukuadatdelete', [SukuAdatAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslugsuku', [SukuAdatAdminController::class, 'checkSlug'])->middleware('auth');


Route::get('/tarianadatadmin', [TarianAdatAdminController::class, 'index'])->middleware('auth');

Route::get('/createtarianadat', [TarianAdatAdminController::class, 'view'])->middleware('auth');

Route::post('/tarianadatcreate', [TarianAdatAdminController::class, 'store'])->middleware('auth');

Route::get('/viewtarianadat/{slug}', [TarianAdatAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/tarianadatupdate', [TarianAdatAdminController::class, 'update'])->middleware('auth');

Route::get('/updatetarianadat/{slug}', [TarianAdatAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/tarianadatdelete', [TarianAdatAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslugtari', [TarianAdatAdminController::class, 'checkSlug'])->middleware('auth');


Route::get('/rumahadatadmin', [RumahAdatAdminController::class, 'index'])->middleware('auth');

Route::get('/createrumahadat', [RumahAdatAdminController::class, 'view'])->middleware('auth');

Route::post('/rumahadatcreate', [RumahAdatAdminController::class, 'store'])->middleware('auth');

Route::get('/viewrumahadat/{slug}', [RumahAdatAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/rumahadatupdate', [RumahAdatAdminController::class, 'update'])->middleware('auth');

Route::get('/updaterumahadat/{slug}', [RumahAdatAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/rumahadatdelete', [RumahAdatAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslugrumah', [RumahAdatAdminController::class, 'checkSlug'])->middleware('auth');


Route::get('/senjataadatadmin', [SenjataAdatAdminController::class, 'index'])->middleware('auth');

Route::get('/createsenjataadat', [SenjataAdatAdminController::class, 'view'])->middleware('auth');

Route::post('/senjataadatcreate', [SenjataAdatAdminController::class, 'store'])->middleware('auth');

Route::get('/viewsenjataadat/{slug}', [SenjataAdatAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/senjataadatupdate', [SenjataAdatAdminController::class, 'update'])->middleware('auth');

Route::get('/updatesenjataadat/{slug}', [SenjataAdatAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/senjataadatdelete', [SenjataAdatAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslugsenjata', [SenjataAdatAdminController::class, 'checkSlug'])->middleware('auth');


Route::get('/pakaianadatadmin', [PakaianAdatAdminController::class, 'index'])->middleware('auth');

Route::get('/createpakaianadat', [PakaianAdatAdminController::class, 'view'])->middleware('auth');

Route::post('/pakaianadatcreate', [PakaianAdatAdminController::class, 'store'])->middleware('auth');

Route::get('/viewpakaianadat/{slug}', [PakaianAdatAdminController::class, 'viewdetail'])->middleware('auth');

Route::post('/pakaianadatupdate', [PakaianAdatAdminController::class, 'update'])->middleware('auth');

Route::get('/updatepakaianadat/{slug}', [PakaianAdatAdminController::class, 'viewupdate'])->middleware('auth');

Route::get('/pakaianadatdelete', [PakaianAdatAdminController::class, 'destroy'])->middleware('auth');

Route::get('/createslugpakaian', [PakaianAdatAdminController::class, 'checkSlug'])->middleware('auth');

