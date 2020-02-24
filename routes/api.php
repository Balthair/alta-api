<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users','UserController')->middleware('auth:api')->middleware('cors');
Route::resource('financial-statements','FinancialStatementController')->middleware('auth:api')->middleware('cors');
Route::resource('employee-classes','EmployeeClassController')->middleware('auth:api')->middleware('cors');
Route::resource('participant-types','ParticipantTypeController')->middleware('auth:api')->middleware('cors');
Route::resource('participant-criterias','ParticipantCriteriaController')->middleware('auth:api')->middleware('cors');
Route::resource('spouse-partners','SpousePartnerController')->middleware('auth:api')->middleware('cors');
Route::resource('benefit-programs','BenefitProgramController')->middleware('auth:api')->middleware('cors');
Route::resource('same-sexs','SameSexController')->middleware('auth:api')->middleware('cors');
Route::resource('benefit-forms','BenefitFormController')->middleware('auth:api')->middleware('cors');
Route::resource('payment-options','PaymentOptionController')->middleware('auth:api')->middleware('cors');
Route::resource('financing-vehicle','FinancingVehicleController')->middleware('auth:api')->middleware('cors');
Route::resource('type-of-vendors','TypeOfVendorController')->middleware('auth:api')->middleware('cors');
Route::resource('plan-entry-statuses','PlanEntryStatusController')->middleware('auth:api')->middleware('cors');
Route::resource('retirement-plan-types','RetirementPlanTypeController')->middleware('auth:api')->middleware('cors');
Route::resource('health-plan-coverage-list','HealthPlanCoverageController')->middleware('auth:api')->middleware('cors');
Route::resource('primary-health-coverage-list','PrimaryHealthCoverageListController')->middleware('auth:api')->middleware('cors');
Route::resource('health-delivery-vehicles','HealthDeliveryVehicleController')->middleware('auth:api')->middleware('cors');
Route::resource('investment-funds-availables','InvestmentFundsAvailableController')->middleware('auth:api')->middleware('cors');

Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser');
