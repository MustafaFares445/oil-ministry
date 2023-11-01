<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LinkRequest;
use App\Models\Link;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $links = Link::all();

        return view('link.index' , compact('links'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('link.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LinkRequest $request)
    {
        Link::create($request->validated());

        redirect()->route('link.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Link $link): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('link.show' , compact('link'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('link.edit' , compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LinkRequest $request, Link $link)
    {
        $link->update($request->validated());

        redirect()->route('link.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        redirect()->route('link.index');
    }
}
