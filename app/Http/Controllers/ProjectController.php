<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $projects =Project::all()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $projects);
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project): JsonResponse
    {
        return $this->successResponse(data: $project);
    }
}