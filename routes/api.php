<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SharedController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Mentor\MentorController;
use App\Http\Controllers\Student\StudentController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Public Routes
Route::post('/login', [AuthController::class, 'login']);


// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/admin/create-user', [AdminController::class, 'createUser']);
    Route::post('/admin/create-cohort', [AdminController::class, 'createCohort']);
    Route::post('/admin/create-track', [AdminController::class, 'createTrack']);

    Route::post('/mentor/create-module', [MentorController::class, 'createModule']);
    Route::post('/mentor/create-topic', [MentorController::class, 'createTopic']);
    Route::post('/mentor/create-curriculum', [MentorController::class, 'createCurriculum']);
    Route::post('/mentor/create-group', [MentorController::class, 'createGroup']);
    Route::post('/mentor/create-task', [MentorController::class, 'createTask']);
    Route::post('/mentor/upload-recording', [MentorController::class, 'uploadRecording']);
    Route::post('/mentor/upload-resource', [MentorController::class, 'uploadResource']);
    Route::post('/mentor/send-notification', [MentorController::class, 'sendNotification']);
    Route::get('/mentor/student-groups', [MentorController::class, 'studentGroups']);

    Route::get('/shared/users', [SharedController::class, 'users']);
    Route::get('/shared/cohorts', [SharedController::class, 'cohorts']);
    Route::get('/shared/tracks', [SharedController::class, 'tracks']);
    Route::get('/shared/tasks', [SharedController::class, 'tasks']);

    Route::get('/student/notifications', [StudentController::class, 'notifications']);
    Route::get('/student/curriculum', [StudentController::class, 'curriculum']);
    Route::get('/student/resources', [StudentController::class, 'resources']);
    Route::get('/student/recordings', [StudentController::class, 'recordings']);
    Route::get('/student/group-members', [StudentController::class, 'groupMembers']);
    Route::get('/student/tasks', [StudentController::class, 'tasks']);


    Route::post('/logout', [AuthController::class, 'logout']);
});
