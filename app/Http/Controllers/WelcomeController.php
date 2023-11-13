<?php

namespace App\Http\Controllers;

use App\Http\Resources\WelcomeResource;
use App\Models\Welcome;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $welcomes =Welcome::where('lang' , App::getLocale())->get()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: WelcomeResource::collection($welcomes) , message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome): JsonResponse
    {
        return $this->successResponse(data: WelcomeResource::make($welcome) , message: 'success');
    }
}
