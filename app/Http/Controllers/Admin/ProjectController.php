<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Project;
use App\Models\Tag;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\TableRow;

class ProjectController extends Controller
{
    protected $page_info =
    [
        'form' =>
        [

            'inputs' => [
                'name'=>
                [
                    'type' => 'text',
                    'label' => 'Project Name',

                ],
                'url' => 
                [
                    'type' => 'text',
                    'label' => 'Project URL',
                ],
                'description' => 
                [
                    'type' => 'text',
                    'label' => 'Project Description',
                ]
            ],
        ],
        'table' =>
        [
            'thead' => ['Name', 'URL'],
            'tbody' => ['name', 'url'],
        ],
        'create_route' =>'projects.store',

        'edit_route' =>'projects.update',
    ];

    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objects = Project::all();
        $page_info = $this->page_info;

        return view('admin.projects.index', compact('page_info', 'objects'));
    }

    public function create()
    {
        $tags = Tag::orderby('name')->pluck('name', 'id');

        return view('admin.projects.action', compact('tags'));
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
        // return response()->json(Project::find($id));
        $tags = Tag::orderby('name')->pluck('name', 'id');
        $project = Project::find($id);

        return view('admin.projects.action', compact('tags', 'project'));
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
