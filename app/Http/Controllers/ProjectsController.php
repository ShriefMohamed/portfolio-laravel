<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectsRequest;
use App\Http\Requests\UpdateProjectsRequest;
use App\Models\Project;
use App\Models\Projects;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.projects')->with(['projects' => Project::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }
}
