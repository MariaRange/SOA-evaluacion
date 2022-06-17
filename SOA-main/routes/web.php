<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\PersonalsController;
use App\Http\Controllers\GroupsController;


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

//Role
Route::get('roles',[RoleController::class, 'index']);
Route::get('roles/{key_name}',[RoleController::class, 'findRole']);
Route::get('create-role',[RoleController::class, 'CreateRole']);
Route::get('update-role/{id}',[RoleController::class, 'UpdateRole']);
Route::get('update-role-k/{key_name}',[RoleController::class, 'UpdateRolebyKeyName']);
Route::get('delete-role/{key_name}',[RoleController::class, 'DeleteRole']);

//Permission
Route::get('permissions',[PermissionController::class, 'index']);
Route::get('permissions/{key_name}',[PermissionController::class, 'findPermission']);
Route::get('create-permission',[PermissionController::class, 'CreatePermission']);
Route::get('update-permission/{id}',[PermissionController::class, 'UpdatePermission']);
Route::get('update-permission-k/{key_name}',[PermissionController::class, 'UpdatePermissionbyKeyName']);
Route::get('delete-permission/{key_name}',[PermissionController::class, 'DeletePermission']);

//Personals
Route::get('personals',[PersonalsController::class, 'index']);
Route::get('personals/{key_name}',[PersonalsController::class, 'findPersonal']);

//Permisos
Route::get('permisos',[PermisosController::class, 'index']);
Route::get('permisos/{key_name}',[PermisosController::class, 'findPermiso']);

//Permisos
Route::get('groups',[GroupsController::class, 'index']);
Route::get('groups/{key_name}',[GroupsController::class, 'findGroup']);
