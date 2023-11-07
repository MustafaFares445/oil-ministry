<?php

namespace App\Http\Controllers;

use App\Models\Welcome;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $welcomes =Welcome::all()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $welcomes);
    }
    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome): JsonResponse
    {
        return $this->successResponse(data: $welcome);
    }
}