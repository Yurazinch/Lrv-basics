<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Group;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($group): View
    {
        $students = DB::table('student')->where('group_id', $group)->get();
        return view('students', ['group' => $group, 'students' => $students]);    
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $group):RedirectResponse
    {
        $group_id = $request->input('group_id');
        $surname = $request->input('surname');
        $name = $request->input('name');
        DB::insert(            
            'insert into student (group_id, surname, name) values (?, ?, ?)',
            [$group_id, $surname, $name]
        );
        return redirect()->route('student.index', ['group' => $group]);
    }

    /**
     * Display the specified resource.
     */
    public function show($group, $student): View
    {
        $group = DB::table('groups')->where('id', $group)->get();
        $gr = [];
        foreach($group as $key => $value)
        {
            $gr = [$key => $value];
        }
        $student = DB::table('student')->where('id', $student)->get(); 
        $st = [];
        foreach($student as $key => $value)
        {
            $st = [$key => $value];
        }     
        return view('st', ['gr' => $gr, 'st' => $st]);
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
