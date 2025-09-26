<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $group_id)
    {
        return $students = DB::select(
            'select * from student where group_id = ?',
            [$group_id]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::insert(
            'insert into student (group_id, surname, name) values (?, ?, ?)',
            $request
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $student = DB::select(
            'select * from student where id = ?',
            [$id]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
