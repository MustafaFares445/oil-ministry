<?php

namespace App\Http\Controllers;

use App\Http\Resources\AffiliatedEntityResource;
use App\Models\AffiliatedEntity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AffiliatedEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $affiliatedEntities =AffiliatedEntity::where('lang' , App::getLocale())->get()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: AffiliatedEntityResource::collection($affiliatedEntities) , message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(AffiliatedEntity $affiliatedEntity): JsonResponse
    {
        return $this->successResponse(data: AffiliatedEntityResource::make($affiliatedEntity) , message: 'success');
    }
}
