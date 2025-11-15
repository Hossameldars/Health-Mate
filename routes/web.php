<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\imageController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\ResultController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\DashoardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Dashboard\Doctor_informations;
use App\Http\Controllers\Dashboard\AppointmentController;
use App\Http\Controllers\Dashboard\MedicalTestController;
use App\Http\Controllers\Dashboard\SpecializationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dashboard\MedicalTestResultController;
use App\Http\Controllers\dashboard\canceledappiontmentcontroller;
use App\Http\Controllers\Dashboard\Medical_test_appointmentController;
use App\Http\Controllers\Dashboard\Canceld_test_appointmentController;

Route::get('/', function () {
    return view('welcome');
    //return view('Dashboard.index');
    //return view('Dashboard.ba');
});

Route::get('/hospital_mate(1)/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('index', [DashoardController::class, 'index'])->name('dashboard.index');
Route::resource('spec', SpecializationController::class);
Route::resource('Doctor', DoctorController::class);
Route::resource('Doctor_informations', Doctor_informations::class);
Route::get('hos',function(){
    return view('Dashboard.signup');
})->name('hos');
Route::resource('patient', PatientController::class);
  Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
// Route::get('image', [imagecontroller::class, 'index'])->name('image.index');
Route::resource('image', imageController::class);
Route::resource('favorite_doctors', \App\Http\Controllers\Dashboard\favorite_doctorsController::class);
Route::resource('Appointment', AppointmentController::class);
Route::resource('medical_test',MedicalTestController::class);
Route::resource ('medical_appointment',Medical_test_appointmentController::class );
Route::resource('test_result',ResultController::class);
Route::get('users', [\App\Http\Controllers\Dashboard\usercontroller::class, 'index'])->name('users.index');
Route::resource('specialization',specializationController::class);
Route::resource('cities', \App\Http\Controllers\Dashboard\citescontroller::class);
Route::get('canceled_appointment', [canceledappiontmentcontroller::class,'index'])->name('canceled_appointment.index');
Route::get('canceled_test_appointment', [Canceld_test_appointmentController::class,'index'])->name('canceled_test_appointment');
Route::resource('Doctor_archives', \App\Http\Controllers\Dashboard\DoctorArchivesController::class);
Route::resource('Doctor_information_archives', \App\Http\Controllers\Dashboard\DoctorinformationArchives::class);