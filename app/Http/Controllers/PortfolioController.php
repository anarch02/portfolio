<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function details($id)
    {
        $project = Project::find($id);
        return view('details', compact('project'));
    }
}
