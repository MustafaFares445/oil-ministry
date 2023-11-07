<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $settings =Setting::all()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $settings);
    }
    /**
     * Display the specified resource.
     */
    public function show(Setting $setting): JsonResponse
    {
        return $this->successResponse(data: $setting);
    }
}
