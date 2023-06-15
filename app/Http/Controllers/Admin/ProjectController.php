<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $myProperty;

    public function __construct()
    {
        $this->myProperty = 'Some value';
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        Project::create($request->validated());

        return response()->json();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->json(Project::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, string $id)
    {
        Project::find($id)->update($request->validated());

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::find($id)->delete();
        return response()->json();
    }
}
