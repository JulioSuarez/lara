<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('empleados', App\Http\Controllers\EmpleadoController::class)->middleware('auth');
Route::resource('roles', App\Http\Controllers\RoleController::class)->middleware('auth');

Route::get('/password/change', 'Auth\ChangePasswordController@showChangePasswordForm')->name('password.change');

# resources\views\auth\passwords\cambiarContrasena.blade.php

route::post('/password/change', 'Auth\ChangePasswordController@changePassword')->name('password.change');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');


    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});
