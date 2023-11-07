<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $services =Service::paginate(5)->makeHidden(['created_at', 'updated_at']);
        return $this->successResponse(data: $services);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service): JsonResponse
    {
        return $this->successResponse(data: $service);
    }
}