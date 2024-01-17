<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //////////////Student URL///////////////

    Route::get('/student/list', [StudentController::class, 'index'])->name('student.list');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
    Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
    Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
    Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

    //////////////Teacher URL///////////////
    
    Route::get('/teacher/list', [TeacherController::class, 'index'])->name('teacher.list');
    Route::get('/teacher/create', [TeacherController::class, 'create'])->name('teacher.create');
    Route::post('/teacher/store', [TeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
    Route::post('/teacher/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
    Route::get('/teacher/delete/{id}', [TeacherController::class, 'delete'])->name('teacher.delete');
    
    //////////////Course URL///////////////
    
    Route::get('/course/list', [CourseController::class, 'index'])->name('course.list');
    Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/course/store', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
});

require __DIR__.'/auth.php';

        //   //////////////// Admin Route ///////////////////

        //   Route::middleware('auth', 'role:admin')->group (function(){

        //     // Route::get('/admin/dashboard', [AdminController::class, 'admindashboard'])->name('admin.dashboard');
        //     // Route::get('/admin/logout', [AdminController::class, 'adminlogout'])->name('admin.logout');
        //     // Route::get('/admin/profile', [AdminController::class, 'adminprofile'])->name('admin.profile');
        //     // Route::post('/admin/profile/store', [AdminController::class, 'adminprofilestore'])->name('admin.profile.store');
        //     // Route::get('/admin/change/password', [AdminController::class, 'adminchangepassword'])->name('admin.change.password');
        //     // Route::post('/admin/update/password', [AdminController::class, 'adminupdatepassword'])->name('admin.update.password');
        //     // Route::get('/admin/user/list', [AdminController::class, 'adminuserlist'])->name('admin.user.list');
        //     // Route::get('/user/status/{id}', [AdminController::class, 'userstatus'])->name('user.status');
        //     // Route::get('/user/password/reset/{id}', [AdminController::class, 'userpasswordreset'])->name('user.password.reset');
        //     // Route::post('/user/password/update/{id}', [AdminController::class, 'userpasswordupdate'])->name('user.password.update');
        //     // Route::get('/user/profile/edit/{id}', [AdminController::class, 'userprofileedit'])->name('user.profile.edit');
        //     // Route::post('/user/profile/update/{id}', [AdminController::class, 'userprofileupdate'])->name('user.profile.update');
        //     // Route::get('/user/profile/delete/{id}', [AdminController::class, 'userprofiledelete'])->name('user.profile.delete');

        //     Route::get('/layout', [AdminController::class, 'layout'])->name('layout');

        //     //////////////Student URL///////////////
        //     Route::get('/student/list', [StudentController::class, 'index'])->name('student.list');
        //     Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
        //     Route::get('/student/store', [StudentController::class, 'store'])->name('student.store');
        //     Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
        //     Route::get('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');
        //     Route::get('/student/delete/{id}', [StudentController::class, 'delete'])->name('student.delete');

        //     //////////////Teacher URL///////////////
            
        //     Route::get('/teacher/list', [StudentController::class, 'index'])->name('teacher.list');
        //     Route::get('/teacher/create', [StudentController::class, 'create'])->name('teacher.create');
        //     Route::get('/teacher/store', [StudentController::class, 'store'])->name('teacher.store');
        //     Route::get('/teacher/edit/{id}', [StudentController::class, 'edit'])->name('teacher.edit');
        //     Route::get('/teacher/update/{id}', [StudentController::class, 'update'])->name('teacher.update');
        //     Route::get('/teacher/delete/{id}', [StudentController::class, 'delete'])->name('teacher.delete');
            
        //     //////////////Course URL///////////////
            
        //     Route::get('/course/list', [StudentController::class, 'index'])->name('course.list');
        //     Route::get('/course/create', [StudentController::class, 'create'])->name('course.create');
        //     Route::get('/course/store', [StudentController::class, 'store'])->name('course.store');
        //     Route::get('/course/edit/{id}', [StudentController::class, 'edit'])->name('course.edit');
        //     Route::get('/course/update/{id}', [StudentController::class, 'update'])->name('course.update');
        //     Route::get('/course/delete/{id}', [StudentController::class, 'delete'])->name('course.delete');

        // });   /// End of Admin Route 
        
        
        //           //////////////// Student Route ///////////////////
        
        // Route::middleware('auth', 'role:student')->group (function(){
        
        //     Route::get('/user/dashboard', [StudentController::class, 'userdashboard'])->name('user.dashboard');
        //     Route::get('/user/logout', [StudentController::class, 'userlogout'])->name('user.logout');
        //     Route::get('/user/profile', [StudentController::class, 'userprofile'])->name('user.profile');
        //     Route::post('/user/profile/store', [StudentController::class, 'userprofilestore'])->name('user.profile.store');
        //     Route::get('/user/change/password', [StudentController::class, 'userchangepassword'])->name('user.change.password');
        //     Route::post('/user/update/password', [StudentController::class, 'userupdatepassword'])->name('user.update.password');
        
        // });   /// End of Student Route 
        
        //           //////////////// Teacher Route ///////////////////
        
        // Route::middleware('auth', 'role:teacher')->group (function(){
        
        //     Route::get('/user/dashboard', [TeacherController::class, 'userdashboard'])->name('user.dashboard');
        //     Route::get('/user/logout', [TeacherController::class, 'userlogout'])->name('user.logout');
        //     Route::get('/user/profile', [TeacherController::class, 'userprofile'])->name('user.profile');
        //     Route::post('/user/profile/store', [TeacherController::class, 'userprofilestore'])->name('user.profile.store');
        //     Route::get('/user/change/password', [TeacherController::class, 'userchangepassword'])->name('user.change.password');
        //     Route::post('/user/update/password', [TeacherController::class, 'userupdatepassword'])->name('user.update.password');
        
        // });   /// End of Teacher Route 
