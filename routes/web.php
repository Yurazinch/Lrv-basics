<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupsController;
use App\Http\Controllers\StudentsController;
use App\Models\Group;
use App\Models\Student;

Route::get('/', function () {
    return view('index');
});

Route::get('/groups', [GroupsController::class, 'index']);

Route::get('/groups/create', function () {
    return view('groupcreate');
});

Route::post('/groups', [GroupsController::class, 'store']);

Route::get('/groups/{group}', [StudentsController::class, 'index'])->name('student.index');

Route::get('/groups/{group}/students/create', function ($group) {
    return view('studentcreate', ['group' => $group]);
})->name('student.create');

Route::post('/groups/{group}/students', [StudentsController::class, 'store'])->name('student.store');

Route::get('/groups/{group}/students/{student}', [StudentsController::class, 'show'])->name('student.show');