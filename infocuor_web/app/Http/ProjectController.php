<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(Request $request)
    {
        $project = Project::create($request->only('title', 'client_name', 'description'));
        return response()->json($project);
    }

    public function updateStage(Request $request, $projectId)
    {
        $project = Project::findOrFail($projectId);
        $project->status = $request->status; // e.g., 'Selecting', 'Editing', 'Finish'
        $project->save();

        // Optionally log the stage change
        ProjectStage::create([
            'project_id' => $project->id,
            'stage_id' => Stage::where('name', $request->status)->first()->id,
            'status' => 'active',
        ]);

        return response()->json(['message' => 'Project stage updated', 'project' => $project]);
    }

    public function getProjectStage($projectId)
    {
        $project = Project::with('stages')->findOrFail($projectId);
        return response()->json($project);
    }
}
