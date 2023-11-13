<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $news = News::where('lang' , App::getLocale())->paginate(5)->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: NewsResource::collection($news) , message: 'success');
    }
    /**
     * Display the specified resource.
     */
    public function show(News $news): JsonResponse
    {
        return $this->successResponse(data: NewsResource::make($news) , message: 'success');
    }
}
