<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $links =Link::all()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $links);
    }
    /**
     * Display the specified resource.
     */
    public function show(Link $link): JsonResponse
    {
        return $this->successResponse(data: $link);
    }
}
