<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $projects =Project::where('lang' , App::getLocale())->get()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: ProjectResource::collection($projects) , message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project): JsonResponse
    {
        return $this->successResponse(data: ProjectResource::make($project) , message: 'success');
    }
}
