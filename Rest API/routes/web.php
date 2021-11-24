<?php

use App\Http\Controllers\Admin\{DashboardController as DashAdmin,UserController as UserAdmin,SettingController as SettingAdmin, AreaController as AreaAdmin, InformationController as InfoAdmin};
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['web','auth', 'roles']],function() {
    Route::group(['roles' => 'admin'], function () {
        Route::get('/admin/dashboard', [DashAdmin::class, 'index'])->name('admin.dashboard');
        Route::get('/admin/user', [UserAdmin::class, 'index'])->name('admin.user');
        Route::get('/admin/setting', [SettingAdmin::class, 'index'])->name('admin.setting');
        Route::get('/admin/area', [AreaAdmin::class, 'index'])->name('admin.area');
        Route::get('/admin/info', [InfoAdmin::class, 'index'])->name('admin.info');
    });
});

require __DIR__.'/auth.php';
