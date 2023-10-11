<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentsRequest;
use App\Models\Groups;
use App\Models\Students;

class StudentsController extends Controller
{
    public function create()
    {
        $groups = Groups::all();

        return view('students.add', ['groups' => $groups]);
    }

    public function store(StudentsRequest $request)
    {
        $data = $request->validated();

        Students::create($data);

        return redirect()->route('groups.index')->with('student_added', 'Student added successfully');
    }
}
