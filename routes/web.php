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
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');


Route::get('/provinsiadmin', [ProvinsiAdminController::class, 'index'])->middleware('admin');

Route::get('/createprovinsi', [ProvinsiAdminController::class, 'view'])->middleware('admin');

Route::post('/provinsicreate', [ProvinsiAdminController::class, 'store'])->middleware('admin');

Route::get('/viewprovinsi/{slug}', [ProvinsiAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/provinsiupdate', [ProvinsiAdminController::class, 'update'])->middleware('admin');

Route::get('/updateprovinsi/{slug}', [ProvinsiAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/provinsidelete', [ProvinsiAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslug', [ProvinsiAdminController::class, 'checkSlug'])->middleware('admin');



Route::get('/makananadmin', [MakananAdminController::class, 'index'])->middleware('admin');

Route::get('/createmakanan', [MakananAdminController::class, 'view'])->middleware('admin');

Route::post('/makanancreate', [MakananAdminController::class, 'store'])->middleware('admin');

Route::get('/viewmakanan/{slug}', [MakananAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/makananupdate', [MakananAdminController::class, 'update'])->middleware('admin');

Route::get('/updatemakanan/{slug}', [MakananAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/makanandelete', [MakananAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslugmakanan', [MakananAdminController::class, 'checkSlug'])->middleware('admin');



Route::get('/sukuadatadmin', [SukuAdatAdminController::class, 'index'])->middleware('admin');

Route::get('/createsukuadat', [SukuAdatAdminController::class, 'view'])->middleware('admin');

Route::post('/sukuadatcreate', [SukuAdatAdminController::class, 'store'])->middleware('admin');

Route::get('/viewsukuadat/{slug}', [SukuAdatAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/sukuadatupdate', [SukuAdatAdminController::class, 'update'])->middleware('admin');

Route::get('/updatesukuadat/{slug}', [SukuAdatAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/sukuadatdelete', [SukuAdatAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslugsuku', [SukuAdatAdminController::class, 'checkSlug'])->middleware('admin');


Route::get('/tarianadatadmin', [TarianAdatAdminController::class, 'index'])->middleware('admin');

Route::get('/createtarianadat', [TarianAdatAdminController::class, 'view'])->middleware('admin');

Route::post('/tarianadatcreate', [TarianAdatAdminController::class, 'store'])->middleware('admin');

Route::get('/viewtarianadat/{slug}', [TarianAdatAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/tarianadatupdate', [TarianAdatAdminController::class, 'update'])->middleware('admin');

Route::get('/updatetarianadat/{slug}', [TarianAdatAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/tarianadatdelete', [TarianAdatAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslugtari', [TarianAdatAdminController::class, 'checkSlug'])->middleware('admin');


Route::get('/rumahadatadmin', [RumahAdatAdminController::class, 'index'])->middleware('admin');

Route::get('/createrumahadat', [RumahAdatAdminController::class, 'view'])->middleware('admin');

Route::post('/rumahadatcreate', [RumahAdatAdminController::class, 'store'])->middleware('admin');

Route::get('/viewrumahadat/{slug}', [RumahAdatAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/rumahadatupdate', [RumahAdatAdminController::class, 'update'])->middleware('admin');

Route::get('/updaterumahadat/{slug}', [RumahAdatAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/rumahadatdelete', [RumahAdatAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslugrumah', [RumahAdatAdminController::class, 'checkSlug'])->middleware('admin');


Route::get('/senjataadatadmin', [SenjataAdatAdminController::class, 'index'])->middleware('admin');

Route::get('/createsenjataadat', [SenjataAdatAdminController::class, 'view'])->middleware('admin');

Route::post('/senjataadatcreate', [SenjataAdatAdminController::class, 'store'])->middleware('admin');

Route::get('/viewsenjataadat/{slug}', [SenjataAdatAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/senjataadatupdate', [SenjataAdatAdminController::class, 'update'])->middleware('admin');

Route::get('/updatesenjataadat/{slug}', [SenjataAdatAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/senjataadatdelete', [SenjataAdatAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslugsenjata', [SenjataAdatAdminController::class, 'checkSlug'])->middleware('admin');


Route::get('/pakaianadatadmin', [PakaianAdatAdminController::class, 'index'])->middleware('admin');

Route::get('/createpakaianadat', [PakaianAdatAdminController::class, 'view'])->middleware('admin');

Route::post('/pakaianadatcreate', [PakaianAdatAdminController::class, 'store'])->middleware('admin');

Route::get('/viewpakaianadat/{slug}', [PakaianAdatAdminController::class, 'viewdetail'])->middleware('admin');

Route::post('/pakaianadatupdate', [PakaianAdatAdminController::class, 'update'])->middleware('admin');

Route::get('/updatepakaianadat/{slug}', [PakaianAdatAdminController::class, 'viewupdate'])->middleware('admin');

Route::get('/pakaianadatdelete', [PakaianAdatAdminController::class, 'destroy'])->middleware('admin');

Route::get('/createslugpakaian', [PakaianAdatAdminController::class, 'checkSlug'])->middleware('admin');


///////////////////////////////////////////////STORE////////////////////////////////////////////////////
Route::get('/armanistore', function(){
    return view('store.index');
});
