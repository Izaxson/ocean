<?php

use Illuminate\Support\Facades\Auth;
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
Route::any('/admin/County/GetSubcounties','App\Http\Controllers\UserChartController@GetSubcounties');

Route::any('/admin/Clan/GetSubClan','App\Http\Controllers\UserChartController@GetSubClan');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
           //admin routes
            Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function(){

                Route::get('dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
                Route::get('auditform',[App\Http\Controllers\Admin\AuditController::class, 'index'])->name('auditform');
                Route::get('auditform',[App\Http\Controllers\Admin\AuditController::class, 'index2'])->name('auditform');
                Route::get('auditform',[App\Http\Controllers\Admin\AuditController::class, 'index'])->name('auditform');
                Route::post('addaudit',[App\Http\Controllers\Admin\AuditController::class, 'store'])->name('addaudit');
                Route::get('auditrecords',[App\Http\Controllers\Admin\AuditController::class, 'records'])->name('auditrecords');
                Route::get('/editform/{id}',[App\Http\Controllers\Admin\AuditController::class, 'editform'])->name('editform');
                Route::post('auditupdate/{id}',[App\Http\Controllers\Admin\AuditController::class, 'update'])->name('update');
                Route::get('auditview/{id}',[App\Http\Controllers\Admin\AuditController::class, 'view'])->name('view');
                Route::get('profile',[App\Http\Controllers\Admin\ChangePasswordController::class, 'index'])->name('profile');
                //Route::post('/profile',[App\Http\Controllers\Admin\ChangePasswordController::class, 'changepassword'])->name('profile');
                Route::get('users',[App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
                Route::post('/user-edit/{id}',[App\Http\Controllers\Admin\UserController::class, 'edit'])->name('useredit');
                Route::get('getSubClan',[App\Http\Controllers\Admin\ClanController::class, 'getSubClan'])->name('getSubClan');
                Route::get('echarts',[App\Http\Controllers\Admin\EchartController::class, 'echarts'])->name('echarts');
                Route::get('clan',[App\Http\Controllers\Admin\AuditController::class, 'clan'])->name('clan');
                Route::get('gender',[App\Http\Controllers\UserChartController::class, 'gender'])->name('gender');
                Route::get('ethnicity',[App\Http\Controllers\UserChartController::class, 'gender'])->name('ethnicity');
                Route::get('disability',[App\Http\Controllers\Admin\ChartController::class, 'disability'])->name('disability');
                Route::get('age',[App\Http\Controllers\Admin\AuditController::class, 'age'])->name('age');
                Route::get('gender',[App\Http\Controllers\Admin\ChartController::class, 'gender'])->name('gender');
                Route::get('placement',[App\Http\Controllers\Admin\ChartController::class, 'placement'])->name('placement');
                Route::get('terms',[App\Http\Controllers\Admin\ChartController::class, 'terms'])->name('terms');
                Route::get('study',[App\Http\Controllers\Admin\ChartController::class, 'study'])->name('study');
                Route::get('governance',[App\Http\Controllers\Admin\ChartController::class, 'governance'])->name('governance');
                Route::get('code',[App\Http\Controllers\Admin\ChartController::class, 'code'])->name('code');
                Route::get('qualification',[App\Http\Controllers\Admin\ChartController::class, 'qualification'])->name('qualification');
                Route::get('subcnty',[App\Http\Controllers\Admin\ChartController::class, 'subcnty'])->name('subcnty');
                Route::get('department',[App\Http\Controllers\Admin\ChartController::class, 'department'])->name('department');
                Route::get('jobgroup',[App\Http\Controllers\Admin\ChartController::class, 'jobgroup'])->name('jobgroup');
                Route::get('localethnicity',[App\Http\Controllers\Admin\ChartController::class, 'localethnicity'])->name('localethnicity');
                Route::get('garre',[App\Http\Controllers\Admin\ChartController::class, 'garre'])->name('garre');
                Route::get('degodia',[App\Http\Controllers\Admin\ChartController::class, 'degodia'])->name('degodia');
                Route::get('murulle',[App\Http\Controllers\Admin\ChartController::class, 'murulle'])->name('murulle');
                Route::get('cornertribe',[App\Http\Controllers\Admin\ChartController::class, 'cornertribe'])->name('cornertribe');
                Route::get('health',[App\Http\Controllers\DepartmentController::class, 'health'])->name('health');
                Route::get('water',[App\Http\Controllers\DepartmentController::class, 'water'])->name('water');
                Route::get('roads',[App\Http\Controllers\DepartmentController::class, 'roads'])->name('roads');
                Route::get('psm',[App\Http\Controllers\DepartmentController::class, 'psm'])->name('psm');
                Route::get('lands',[App\Http\Controllers\DepartmentController::class, 'lands'])->name('lands');
                Route::get('education',[App\Http\Controllers\DepartmentController::class, 'education'])->name('education');
                Route::get('agriculture',[App\Http\Controllers\DepartmentController::class, 'agriculture'])->name('agriculture');
                Route::get('finance',[App\Http\Controllers\DepartmentController::class, 'finance'])->name('finance');
                Route::get('trade',[App\Http\Controllers\DepartmentController::class, 'trade'])->name('trade');
                Route::get('oog',[App\Http\Controllers\DepartmentController::class, 'oog'])->name('oog');
                Route::get('mdrmunicipal',[App\Http\Controllers\DepartmentController::class, 'mdrmunicipal'])->name('mdrmunicipal');
                Route::get('elwakmunicipal',[App\Http\Controllers\DepartmentController::class, 'elwakmunicipal'])->name('elwakmunicipal');
                Route::get('elwasco',[App\Http\Controllers\DepartmentController::class, 'elwasco'])->name('elwasco');
                Route::get('mandwasco',[App\Http\Controllers\DepartmentController::class, 'mandwasco'])->name('mandwasco');
                Route::get('psb',[App\Http\Controllers\DepartmentController::class, 'psb'])->name('psb');
            });
            //staff routes
            Route::group(['as'=>'staff.','prefix'=>'staff','namespsace'=>'Staff','middleware'=>['auth','staff']],function(){
                Route::get('dashboard',[App\Http\Controllers\Staff\DashBoardController::class, 'index'])->name('dashboard');
                Route::get('auditform',[App\Http\Controllers\Staff\AuditController::class, 'index'])->name('auditform');
                Route::post('addaudit',[App\Http\Controllers\Staff\AuditController::class, 'store'])->name('addaudit');
                Route::post('addaudit',[App\Http\Controllers\Staff\AuditController::class, 'store'])->name('addaudit');
                Route::get('/editform/{id}',[App\Http\Controllers\Staff\AuditController::class, 'editform'])->name('editform');
                Route::post('auditupdate/{id}',[App\Http\Controllers\Staff\AuditController::class, 'update'])->name('update');
                Route::get('auditview/{id}',[App\Http\Controllers\Staff\AuditController::class, 'view'])->name('view');
                Route::get('auditrecords',[App\Http\Controllers\Staff\AuditController::class, 'records'])->name('auditrecords');
                Route::get('password',[App\Http\Controllers\Staff\ChangePasswordController::class, 'index'])->name('password-change');
                Route::get('profile',[App\Http\Controllers\Staff\ProfileController::class, 'index'])->name('profile');
                //Route::post('/profile',[App\Http\Controllers\Staff\ChangePasswordController::class, 'changepassword'])->name('profile');
                Route::any('/staff/County/GetSubcounties','App\Http\Controllers\UserChartController@GetSubcounties');
                Route::any('/staff/Clan/GetSubClan','App\Http\Controllers\UserChartController@GetSubClan');
           
           
           
            });
           


