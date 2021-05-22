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

Route::get('index', [App\Http\Controllers\LoginController::class, 'index'])->name('index');

Route::get('dangki', [App\Http\Controllers\RegisterController::class, 'register'])->name('dangki');
Route::post('checkRegister', [App\Http\Controllers\RegisterController::class, 'checkRegister'])->name('checkRegister');

Route::get('dangnhap', [App\Http\Controllers\LoginController::class, 'login'])->name('dangnhap');
Route::post('checkLogin', [App\Http\Controllers\LoginController::class, 'checkLogin'])->name('checkLogin');

Route::get('doimatkhau', [App\Http\Controllers\LoginController::class, 'doimatkhau'])->name('doimatkhau');
Route::post('checkDoiMatKhau/{id}', [App\Http\Controllers\LoginController::class, 'checkDoiMatKhau'])->name('checkDoiMatKhau');

Route::get('dangxuat', [App\Http\Controllers\LoginController::class, 'logout'])->name('dangxuat');

Route::get('employeeIndex', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employeeIndex');
Route::get('employeeEdit/{id}', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employeeEdit');
Route::post('employeeUpdate/{id}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employeeUpdate');
Route::get('employeeDelete/{id}', [App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employeeDelete');
Route::get('employeeCreate', [App\Http\Controllers\EmployeeController::class, 'create'])->name('employeeCreate');
Route::post('employeeStore', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employeeStore');


Route::get('departmentIndex', [App\Http\Controllers\DepartmentController::class, 'index'])->name('departmentIndex');
Route::get('departmentEdit/{id}', [App\Http\Controllers\DepartmentController::class, 'edit'])->name('departmentEdit');
Route::post('departmentUpdate/{id}', [App\Http\Controllers\DepartmentController::class, 'update'])->name('departmentUpdate');
Route::get('departmentDelete/{id}', [App\Http\Controllers\DepartmentController::class, 'destroy'])->name('departmentDelete');
Route::get('departmentCreate', [App\Http\Controllers\DepartmentController::class, 'create'])->name('departmentCreate');
Route::post('departmentStore', [App\Http\Controllers\DepartmentController::class, 'store'])->name('departmentStore');


Route::get('relativeIndex', [App\Http\Controllers\RelativeController::class, 'index'])->name('relativeIndex');
Route::get('relativeEdit/{id}', [App\Http\Controllers\RelativeController::class, 'edit'])->name('relativeEdit');
Route::post('relativeUpdate/{id}', [App\Http\Controllers\RelativeController::class, 'update'])->name('relativeUpdate');
Route::get('relativeDelete/{id}', [App\Http\Controllers\RelativeController::class, 'destroy'])->name('relativeDelete');
Route::get('relativeCreate', [App\Http\Controllers\RelativeController::class, 'create'])->name('relativeCreate');
Route::post('relativeStore', [App\Http\Controllers\RelativeController::class, 'store'])->name('relativeStore');


Route::get('positionIndex', [App\Http\Controllers\PositionController::class, 'index'])->name('positionIndex');
Route::get('positionEdit/{id}', [App\Http\Controllers\PositionController::class, 'edit'])->name('positionEdit');
Route::post('positionUpdate/{id}', [App\Http\Controllers\PositionController::class, 'update'])->name('positionUpdate');
Route::get('positionDelete/{id}', [App\Http\Controllers\PositionController::class, 'destroy'])->name('positionDelete');
Route::get('positionCreate', [App\Http\Controllers\PositionController::class, 'create'])->name('positionCreate');
Route::post('positionStore', [App\Http\Controllers\PositionController::class, 'store'])->name('positionStore');


Route::get('contractIndex', [App\Http\Controllers\ContractController::class, 'index'])->name('contractIndex');
Route::get('contractEdit/{id}', [App\Http\Controllers\ContractController::class, 'edit'])->name('contractEdit');
Route::post('contractUpdate/{id}', [App\Http\Controllers\ContractController::class, 'update'])->name('contractUpdate');
Route::get('contractDelete/{id}', [App\Http\Controllers\ContractController::class, 'destroy'])->name('contractDelete');
Route::get('contractCreate', [App\Http\Controllers\ContractController::class, 'create'])->name('contractCreate');
Route::post('contractStore', [App\Http\Controllers\ContractController::class, 'store'])->name('contractStore');


Route::get('bonusIndex', [App\Http\Controllers\BonusController::class, 'index'])->name('bonusIndex');
Route::get('bonusEdit/{id}', [App\Http\Controllers\BonusController::class, 'edit'])->name('bonusEdit');
Route::post('bonusUpdate/{id}', [App\Http\Controllers\BonusController::class, 'update'])->name('bonusUpdate');
Route::get('bonusDelete/{id}', [App\Http\Controllers\BonusController::class, 'destroy'])->name('bonusDelete');
Route::get('bonusCreate', [App\Http\Controllers\BonusController::class, 'create'])->name('bonusCreate');
Route::post('bonusStore', [App\Http\Controllers\BonusController::class, 'store'])->name('bonusStore');


Route::get('disciplineIndex', [App\Http\Controllers\DisciplineController::class, 'index'])->name('disciplineIndex');
Route::get('disciplineEdit/{id}', [App\Http\Controllers\DisciplineController::class, 'edit'])->name('disciplineEdit');
Route::post('disciplineUpdate/{id}', [App\Http\Controllers\DisciplineController::class, 'update'])->name('disciplineUpdate');
Route::get('disciplineDelete/{id}', [App\Http\Controllers\DisciplineController::class, 'destroy'])->name('disciplineDelete');
Route::get('disciplineCreate', [App\Http\Controllers\DisciplineController::class, 'create'])->name('disciplineCreate');
Route::post('disciplineStore', [App\Http\Controllers\DisciplineController::class, 'store'])->name('disciplineStore');



Route::get('timesheetIndex', [App\Http\Controllers\TimeSheetController::class, 'index'])->name('timesheetIndex');
Route::get('timesheetEdit/{id}', [App\Http\Controllers\TimeSheetController::class, 'edit'])->name('timesheetEdit');
Route::post('timesheetUpdate/{id}', [App\Http\Controllers\TimeSheetController::class, 'update'])->name('timesheetUpdate');
Route::get('timesheetDelete/{id}', [App\Http\Controllers\TimeSheetController::class, 'destroy'])->name('timesheetDelete');
Route::get('timesheetCreate', [App\Http\Controllers\TimeSheetController::class, 'create'])->name('timesheetCreate');
Route::post('timesheetStore', [App\Http\Controllers\TimeSheetController::class, 'store'])->name('timesheetStore');


Route::get('salaryIndex', [App\Http\Controllers\SalaryController::class, 'index'])->name('salaryIndex');
Route::get('salaryEdit/{id}', [App\Http\Controllers\SalaryController::class, 'edit'])->name('salaryEdit');
Route::post('salaryUpdate/{id}', [App\Http\Controllers\SalaryController::class, 'update'])->name('salaryUpdate');
Route::get('salaryDelete/{id}', [App\Http\Controllers\SalaryController::class, 'destroy'])->name('salaryDelete');
Route::get('salaryCreate', [App\Http\Controllers\SalaryController::class, 'create'])->name('salaryCreate');
Route::post('salaryStore', [App\Http\Controllers\SalaryController::class, 'store'])->name('salaryStore');


Route::get('planeRecruitmentIndex', [App\Http\Controllers\PlaneRecruitmentController::class, 'index'])->name('planeRecruitmentIndex');
Route::get('planeRecruitmentEdit/{id}', [App\Http\Controllers\PlaneRecruitmentController::class, 'edit'])->name('planeRecruitmentEdit');
Route::post('planeRecruitmentUpdate/{id}', [App\Http\Controllers\PlaneRecruitmentController::class, 'update'])->name('planeRecruitmentUpdate');
Route::get('planeRecruitmentDelete/{id}', [App\Http\Controllers\PlaneRecruitmentController::class, 'destroy'])->name('planeRecruitmentDelete');
Route::get('planeRecruitmentCreate', [App\Http\Controllers\PlaneRecruitmentController::class, 'create'])->name('planeRecruitmentCreate');
Route::post('planeRecruitmentStore', [App\Http\Controllers\PlaneRecruitmentController::class, 'store'])->name('planeRecruitmentStore');


Route::get('interviewDetailIndex', [App\Http\Controllers\InterviewDetailController::class, 'index'])->name('interviewDetailIndex');
Route::get('interviewDetailEdit/{id}', [App\Http\Controllers\InterviewDetailController::class, 'edit'])->name('interviewDetailEdit');
Route::post('interviewDetailUpdate/{id}', [App\Http\Controllers\InterviewDetailController::class, 'update'])->name('interviewDetailUpdate');
Route::get('interviewDetailDelete/{id}', [App\Http\Controllers\InterviewDetailController::class, 'destroy'])->name('interviewDetailDelete');
Route::get('interviewDetailCreate', [App\Http\Controllers\InterviewDetailController::class, 'create'])->name('interviewDetailCreate');
Route::post('interviewDetailStore', [App\Http\Controllers\InterviewDetailController::class, 'store'])->name('interviewDetailStore');



Route::get('probationaryIndex', [App\Http\Controllers\ProbationaryController::class, 'index'])->name('probationaryIndex');
Route::get('probationaryEdit/{id}', [App\Http\Controllers\ProbationaryController::class, 'edit'])->name('probationaryEdit');
Route::post('probationaryUpdate/{id}', [App\Http\Controllers\ProbationaryController::class, 'update'])->name('probationaryUpdate');
Route::get('probationaryDelete/{id}', [App\Http\Controllers\ProbationaryController::class, 'destroy'])->name('probationaryDelete');
Route::get('probationaryCreate', [App\Http\Controllers\ProbationaryController::class, 'create'])->name('probationaryCreate');
Route::post('probationaryStore', [App\Http\Controllers\ProbationaryController::class, 'store'])->name('probationaryStore');


Route::get('bonusDetailIndex', [App\Http\Controllers\BonusDetailController::class, 'index'])->name('bonusDetailIndex');
Route::get('bonusDetailEdit/{id}', [App\Http\Controllers\BonusDetailController::class, 'edit'])->name('bonusDetailEdit');
Route::post('bonusDetailUpdate/{id}', [App\Http\Controllers\BonusDetailController::class, 'update'])->name('bonusDetailUpdate');
Route::get('bonusDetailDelete/{id}', [App\Http\Controllers\BonusDetailController::class, 'destroy'])->name('bonusDetailDelete');
Route::get('bonusDetailCreate', [App\Http\Controllers\BonusDetailController::class, 'create'])->name('bonusDetailCreate');
Route::post('bonusDetailStore', [App\Http\Controllers\BonusDetailController::class, 'store'])->name('bonusDetailStore');


Route::get('disciplineDetailIndex', [App\Http\Controllers\DisciplineDetailController::class, 'index'])->name('disciplineDetailIndex');
Route::get('disciplineDetailEdit/{id}', [App\Http\Controllers\DisciplineDetailController::class, 'edit'])->name('disciplineDetailEdit');
Route::post('disciplineDetailUpdate/{id}', [App\Http\Controllers\DisciplineDetailController::class, 'update'])->name('disciplineDetailUpdate');
Route::get('disciplineDetailDelete/{id}', [App\Http\Controllers\DisciplineDetailController::class, 'destroy'])->name('disciplineDetailDelete');
Route::get('disciplineDetailCreate', [App\Http\Controllers\DisciplineDetailController::class, 'create'])->name('disciplineDetailCreate');
Route::post('disciplineDetailStore', [App\Http\Controllers\DisciplineDetailController::class, 'store'])->name('disciplineDetailStore');


Route::get('diligenceIndex', [App\Http\Controllers\DiligenceController::class, 'index'])->name('diligenceIndex');
Route::get('diligenceEdit/{id}', [App\Http\Controllers\DiligenceController::class, 'edit'])->name('diligenceEdit');
Route::post('diligenceUpdate/{id}', [App\Http\Controllers\DiligenceController::class, 'update'])->name('diligenceUpdate');
Route::get('diligenceDelete/{id}', [App\Http\Controllers\DiligenceController::class, 'destroy'])->name('diligenceDelete');
Route::get('diligenceCreate', [App\Http\Controllers\DiligenceController::class, 'create'])->name('diligenceCreate');
Route::post('diligenceStore', [App\Http\Controllers\DiligenceController::class, 'store'])->name('diligenceStore');


Route::get('quitIndex', [App\Http\Controllers\QuitController::class, 'index'])->name('quitIndex');
Route::get('quitEdit/{id}', [App\Http\Controllers\QuitController::class, 'edit'])->name('quitEdit');
Route::post('quitUpdate/{id}', [App\Http\Controllers\QuitController::class, 'update'])->name('quitUpdate');
Route::get('quitDelete/{id}', [App\Http\Controllers\QuitController::class, 'destroy'])->name('quitDelete');
Route::get('quitCreate', [App\Http\Controllers\QuitController::class, 'create'])->name('quitCreate');
Route::post('quitStore', [App\Http\Controllers\QuitController::class, 'store'])->name('quitStore');


Route::get('userIndex', [App\Http\Controllers\UserController::class, 'index'])->name('userIndex');
Route::get('userEdit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('userEdit');
Route::post('userUpdate/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('userUpdate');
Route::get('userDelete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('userDelete');
Route::get('userCreate', [App\Http\Controllers\UserController::class, 'create'])->name('userCreate');
Route::post('userStore', [App\Http\Controllers\UserController::class, 'store'])->name('userStore');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');