<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $services =Service::all();

        return $this->successResponse(data: $services);
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service): \Illuminate\Http\JsonResponse
    {
        return $this->successResponse(data: $service);
    }

}
