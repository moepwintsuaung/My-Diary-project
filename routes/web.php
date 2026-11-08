<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
use App\Http\Controllers\DiaryController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello, Laravel Day 2!";
});

Route::get('/greet', function () {
    return view('greeting');
});

Route::get('/user', [UserController::class, 'index']);

// 1. Register Form ကိုပြရန်
Route::get('/register', function () {
    return view('register');
});

// 2. Form က ပို့လိုက်တဲ့ Data များကို Database ထဲသိမ်းရန်
Route::post('/register', [UserController::class, 'register']);

// 3. Register ပြီးသွားသူများ စာရင်းကို ပြရန်
Route::get('/registered-users', [UserController::class, 'showRegisteredUsers']);

// Login Form ပြရန်
Route::get('/login', [UserController::class, 'showLoginForm']);

// Login Data စစ်ဆေးရန်
Route::post('/login', [UserController::class, 'login']);


// Home Page ပြရန်
Route::get('/home', function () {
    return view('home');
    
   
});
Route::get('/test-button', function () {
    return view('test-button'); // ခုနကဆောက် and view နာမည်
});
Route::get('/diaries', [DiaryController::class, 'index']);      // မှတ်စုအားလုံးပြရန်
Route::get('/diaries/create', [DiaryController::class, 'create']); // မှတ်စုအသစ်ရေးမည့် Form ပြရန်
Route::post('/diaries', [DiaryController::class, 'store']);     // Form မှ Data များကို သိမ်းဆည်းရန်
Route::delete('/diaries/{diary}', [DiaryController::class, 'destroy']);
Route::post('/register', [UserController::class, 'register'])->name('register.submit');