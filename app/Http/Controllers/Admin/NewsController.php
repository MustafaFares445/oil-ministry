<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $news = News::all();
        return view('news.index'  , compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewsRequest $request)
    {
        News::create($request->validated());

        redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('news.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('news.edit' , compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NewsRequest $request, News $news)
    {
        $news->update($request->validated());
        redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news): \Illuminate\Http\RedirectResponse
    {
        $news->delete();
        return redirect()->route('news.index');
    }
}
