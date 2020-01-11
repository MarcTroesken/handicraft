<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    /**
     * Return all projects from database
     *
     * @return json
     */
    public function index()
    {
        // ToDo: Add user scope, after authentication is done
        return Project::latest()->all();
    }
    /**
     * Stote a new project in database
     *
     * @return json
     */
    public function store()
    {
        $project = Project::create(request()->all());

        return response()->json([
            'status' => 'ok',
            'project' => $project,
        ]);
    }

    /**
     * Update a project instance in database
     *
     * @param Project $project
     * @return json
     */
    public function update(Project $project)
    {
        $project->update(request()->all());

        return response()->json([
            'status' => 'ok',
            'project' => $project->fresh(),
        ]);
    }
}
