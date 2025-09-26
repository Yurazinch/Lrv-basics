<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', function () {
    return view('groupsList');
});

Route::get('/groups/create', function () {
    return view('groupCreate');
});

Route::post('/groups', [GroupsController::class, 'store'])->name('group.store');

Route::get('/groups/{group}', function ($group) {
    return view('studentsList');
})->whereGroup($group);

Route::get('/groups/{group}/student/create', function ($group) {
    return view('studentCreate');
})->whereGroup($group);

Route::post('/groups/{group}/student', [StudentController::class, ['{group}', 'store']])->name('student.store');

Route::get('/groups/{group}/students/{student}', function ($group, $student) {
    return view('student');
})->whereGroup($group)->whereStudent($student);