<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services =Service::where('lang' , App::getLocale())->get()->makeHidden(['created_at', 'updated_at']);
        return $this->successResponse(data: $services , message: 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return $this->successResponse(data: $service , message: 'success');
    }

}
