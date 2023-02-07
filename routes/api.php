<?php

use App\Http\Controllers\BirthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffLoginController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyLogin;
use App\Http\Controllers\CompanyRequestController;
use App\Http\Controllers\MarriageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//register user
Route::post('register_user', [UserController::class, 'registerUser']);
Route::get('users', [UserController::class, 'getCustomers']);


//login customer/user
Route::post('login_user', [LoginController::class, 'loginUser']);

//logins staff
Route::post('login_staff', [StaffLoginController::class, 'loginStaff']);


//thirdparties
Route::post('partnership_registration', [CompanyController::class, 'companyReg']);
Route::get('partners', [CompanyController::class, 'getCompanies']);


//logins partners
Route::post('login_partner', [CompanyLogin::class, 'loginPartner']);


//company request
Route::post('request', [CompanyRequestController::class, 'compRequest']);
Route::get('requests', [CompanyRequestController::class, 'getRequests']);






Route::middleware('auth:sanctum')->group(function () {

});


//birthCRUD
Route::get('births', [BirthController::class, 'getBirths']);
Route::post('add_birth', [BirthController::class, 'birthRegister']);
Route::get('get_birth/{id}', [BirthController::class, 'getBirth']);
Route::put('update_birth/{id}', [BirthController::class, 'updateBirth']);


//marriageCRUD
Route::get('marriages', [MarriageController::class, 'getMarriages']);
Route::post('add_marriage', [MarriageController::class, 'marriageRegister']);
Route::get('get_marriage/{id}', [MarriageController::class, 'getMarriage']);
Route::put('update_marriage/{id}', [MarriageController::class, 'updateMarriage']);


Route::post('logout', [LoginController::class, 'logout']);


// Route::post('register_staff', [StaffController::class, 'registerStaff']);


// //register user/customers
// Route::post('register_user', [UserController::class, 'registerUser']);
// Route::get('users', [UserController::class, 'getCustomers']);
// Route::get('user/{id}', [UserController::class, 'getUserById']);
// Route::get('getUserByRole/{role}', [UserController::class, 'getUserByRole']);


//for birth rooutes


// Route::get('births', [BirthController::class, 'getBirths']);
// Route::post('add_birth', [BirthController::class, 'birthRegister']);
// Route::get('births/{id}', [BirthController::class, 'getBirth']);


