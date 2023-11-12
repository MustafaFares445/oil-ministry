<?php

namespace App\Http\Controllers;

use App\Http\Resources\SettingResource;
use App\Models\Setting;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $settings = Setting::where('lang' , App::getLocale())->get()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: SettingResource::collection($settings) , message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(Setting $setting): JsonResponse
    {
        return $this->successResponse(data: SettingResource::make($setting) , message: 'success');
    }
}
