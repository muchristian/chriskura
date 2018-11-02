<?php
use Spatie\Permission\Models\Role;
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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

    Route::get('/admin', 'Auth\AdminLoginController@showLoginForm')->name('auth.admin-login');
    Route::post('/admin', 'Auth\AdminLoginController@login')->name('auth.admin-login');
    Route::get('/dashboard', 'AdminController@index')->name('admin.index');

Route::get('/user/verify/{token}', 'UserController@verifyUser');
Route::get('/create_auth_admin', function(){
$role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('administrator Permission');
        auth()->user()->assignRole('admin');
});
Route::group(['middleware' => ['auth']], function() {
    Route::get('/staff', 'UserController@index')->name('staff.index');
    Route::get('/staff/create', 'UserController@create')->name('staff.create');
    Route::post('/staff', 'UserController@store')->name('staff.store');
    Route::get('/role', 'RoleController@index')->name('role.index');
    Route::get('/role/create', 'RoleController@create')->name('role.create');
    Route::post('/role', 'RoleController@store')->name('role.store');
});