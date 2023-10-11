<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeachersRequest;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function create() {
        return view('teachers.add');
    }

    public function store(TeachersRequest $request) {
        $data = $request->validated();

        Teachers::create($data);

        return redirect()->route('groups.create')->with('teacher_added', 'Teacher added successfully');
    }
}
