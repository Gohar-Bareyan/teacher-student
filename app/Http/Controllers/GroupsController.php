<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupsRequest;
use App\Http\Resources\GroupsResource;
use App\Models\Groups;
use App\Models\Teachers;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index()
    {
        $groups = GroupsResource::collection(Groups::with('teachers', 'students')->get());

        return view('groups.all', ['groups' => $groups]);
    }

    public function create()
    {
        $teachers = Teachers::all();

        return view('groups.add', ['teachers' => $teachers]);
    }

    public function store(GroupsRequest $request)
    {
        $data = $request->validated();

        Groups::create($data);

        return redirect()->route('students.create')->with('group_added', 'Group added successfully');
    }

    public function show(Groups $group)
    {
        return view('groups.detail', ['group' => $group]);
    }
}
