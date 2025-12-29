<?php

use App\Http\Controllers\Student\AuthController;
use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Student Routes (Subdomain: student.roohulquranacademy.com)
|--------------------------------------------------------------------------
|
| These routes are for the student dashboard subdomain.
| All routes here are prefixed with the student subdomain.
|
*/

// Public routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('student.login');
Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware(['auth:student'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('student.dashboard');
    
    // Enrollments
    Route::get('/enrollments', [DashboardController::class, 'enrollments'])->name('student.enrollments');
    Route::get('/enrollments/{enrollment}', [DashboardController::class, 'showEnrollment'])->name('student.enrollments.show');
    
    // Payments
    Route::get('/payments', [DashboardController::class, 'payments'])->name('student.payments');
    Route::get('/invoices/{invoice}/download', [DashboardController::class, 'downloadInvoice'])->name('student.invoice.download');
    
    // Attendance
    Route::get('/attendance', [DashboardController::class, 'attendance'])->name('student.attendance');
    
    // Sessions
    Route::get('/sessions', [DashboardController::class, 'sessions'])->name('student.sessions');
    
    // Profile
    Route::get('/profile', [DashboardController::class, 'profile'])->name('student.profile');
    Route::post('/profile', [DashboardController::class, 'updateProfile'])->name('student.profile.update');
    Route::post('/change-password', [DashboardController::class, 'changePassword'])->name('student.change-password');
    
    // Notifications
    Route::get('/notifications', [\App\Http\Controllers\Student\NotificationController::class, 'all'])->name('student.notifications');
    Route::get('/notifications/count', [\App\Http\Controllers\Student\NotificationController::class, 'count'])->name('student.notifications.count');
    Route::get('/notifications/list', [\App\Http\Controllers\Student\NotificationController::class, 'index'])->name('student.notifications.list');
    Route::post('/notifications/{id}/read', [\App\Http\Controllers\Student\NotificationController::class, 'markAsRead'])->name('student.notifications.read');
    Route::post('/notifications/mark-all-read', [\App\Http\Controllers\Student\NotificationController::class, 'markAllAsRead'])->name('student.notifications.mark-all-read');
    
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('student.logout');
});

