<?php

namespace App\Http\Controllers;

use App\Models\AffiliatedEntity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AffiliatedEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $affiliatedEntities =AffiliatedEntity::all()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $affiliatedEntities);
    }
    /**
     * Display the specified resource.
     */
    public function show(AffiliatedEntity $affiliatedEntity): JsonResponse
    {
        return $this->successResponse(data: $affiliatedEntity);
    }
}
