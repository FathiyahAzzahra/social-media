<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PrivacySettingsController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('homepage');
});


Route::get('/login', function () {
    return view('loginpage');
});

// route register
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


// User routes
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

// Password Reset routes
Route::prefix('password-reset')->group(function () {
    Route::get('/request', [PasswordResetController::class, 'requestForm'])->name('password.request');
    Route::post('/request', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset/{token}', [PasswordResetController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset', [PasswordResetController::class, 'reset'])->name('password.update');
});

// Profile routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
});

// Follower routes
Route::prefix('followers')->group(function () {
    Route::post('/{user}', [FollowerController::class, 'follow'])->name('followers.follow');
    Route::delete('/{user}', [FollowerController::class, 'unfollow'])->name('followers.unfollow');
    Route::get('/{user}/followers', [FollowerController::class, 'followersList'])->name('followers.list');
    Route::get('/{user}/following', [FollowerController::class, 'followingList'])->name('following.list');
});

// Post routes
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/', [PostController::class, 'store'])->name('posts.store');
    Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

// Like routes
Route::prefix('likes')->group(function () {
    Route::post('/{post}', [LikeController::class, 'like'])->name('likes.like');
    Route::delete('/{post}', [LikeController::class, 'unlike'])->name('likes.unlike');
});

// Comment routes
Route::prefix('comments')->group(function () {
    Route::post('/{post}', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/{comment}', [CommentController::class, 'update'])->name('comments.update');
    Route::delete('/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');
});

// Message routes
Route::prefix('messages')->group(function () {
    Route::get('/', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/create', [MessageController::class, 'create'])->name('messages.create');
    Route::post('/', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/{message}', [MessageController::class, 'show'])->name('messages.show');
    Route::get('/{message}/edit', [MessageController::class, 'edit'])->name('messages.edit');
    Route::put('/{message}', [MessageController::class, 'update'])->name('messages.update');
    Route::delete('/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
});

// Privacy Settings routes
Route::prefix('privacy-settings')->group(function () {
    Route::get('/', [PrivacySettingsController::class, 'index'])->name('privacy-settings.index');
    Route::put('/', [PrivacySettingsController::class, 'update'])->name('privacy-settings.update');
});

// Report routes
Route::prefix('reports')->group(function () {
    Route::post('/{user}', [ReportController::class, 'store'])->name('reports.store');
    Route::delete('/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
});
