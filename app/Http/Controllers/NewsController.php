<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $news = News::paginate(5)->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $news);
    }
    /**
     * Display the specified resource.
     */
    public function show(News $news): JsonResponse
    {
        return $this->successResponse(data: $news);
    }
}
