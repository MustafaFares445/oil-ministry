<?php

namespace App\Http\Controllers;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $services =Service::all()->makeHidden(['created_at' , 'updated_at']);

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
