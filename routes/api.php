<?php

use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\PatientAuthController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// User Routes
Route::prefix('users-group')->group(function () {
    // User Routes
    Route::apiResource('users', UserController::class)->middleware('auth:sanctum');

    // User Authentication Routes
    Route::post('user/register', [UserController::class, 'register']);
    Route::post('user/login', [UserController::class, 'login']);

    // User Logout Route
    Route::post('user/logout', [UserController::class, 'logout'])->middleware('auth:sanctum,doctor,patient');
});

// Doctor Routes
Route::prefix('doctors-group')->group(function () {
    // Doctor Routes
    Route::apiResource('doctors', DoctorController::class)->middleware('auth:sanctum,doctor');
    // Update Doctor Route
    Route::post('doctors/update/{id}', [DoctorController::class, 'update'])->middleware('auth:sanctum,doctor');

    // Authentication Routes
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    // Doctor Logout Route
    Route::post('doctor/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum,doctor,patient');

    // Top Rated Doctors
    Route::get('top-doctors', [DoctorController::class, 'topDoctors'])->middleware('auth:sanctum,patient');

    // Routes for patient (view only: index and show)
    Route::middleware('auth:sanctum,patient')->group(function () {
        Route::get('/doctors', [DoctorController::class, 'index']); // All Doctors
        Route::get('/doctors/view/{id}', [DoctorController::class, 'show']); // Single Doctor
    });

    // New Route to restore Doctor from archive
    Route::post('doctors/restore/{id}', [DoctorController::class, 'restore'])->middleware('auth:sanctum');
    // New Route to Delete Doctor Data from Archive
    Route::delete('doctors/delete/archive/{id}', [DoctorController::class, 'deleteArchive'])->middleware('auth:sanctum');
});

// Patient Routes
Route::prefix('patient-group')->group(function () {
    // Route for patient registration (without authentication)
    Route::post('patient/register', [PatientController::class, 'store']);

    // Patient Authentication Routes
    Route::post('patient/login', [PatientAuthController::class, 'login']);

    // Protected routes for patients (for patient, owner and Doctor using sanctum)
    Route::middleware('auth:sanctum,doctor,patient')->group(function () {
        Route::post('patient/logout', [PatientAuthController::class, 'logout']);
        Route::get('patients', [PatientController::class, 'index']);
        Route::get('patient/me', [PatientController::class, 'showCurrentPatient']);
        Route::get('patients/{id}', [PatientController::class, 'show']);
        Route::put('patient/update/{id}', [PatientController::class, 'update']);
        Route::delete('patient/destroy/{id}', [PatientController::class, 'destroy']);

        // New Routes for favorite_doctors
        Route::post('favorite/toggle', [PatientController::class, 'toggleFavorite']); // Add/Remove a doctor from favorites
        Route::get('favorite/doctors', [PatientController::class, 'getFavoriteDoctors']); // Retrieve the list of favorite doctors
    });

});

// Routes for managing appointments
Route::prefix('appointments')->middleware('auth:sanctum,doctor,patient')->group(function () {
    // Book a new appointment (Patient only)
    Route::post('book', [AppointmentController::class, 'bookAppointment'])->name('appointments.book');

    // Cancel an existing appointment (Patient only)
    Route::delete('cancel/{appointmentId}', [AppointmentController::class, 'cancelAppointment'])->name('appointments.cancel');

    // Get available appointments for a doctor on a specific date (Patient or Doctor)
    Route::get('doctors/available/{docId}', [AppointmentController::class, 'getAvailableAppointments'])->name('appointments.available');
});
