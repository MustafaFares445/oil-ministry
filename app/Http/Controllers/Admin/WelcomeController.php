<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WelcomeRequest;
use App\Models\Welcome;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $welcomes = Welcome::all();

        return view('welcome.index.blade' , compact('welcomes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('welcome.create.blade');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WelcomeRequest $request)
    {
        Welcome::create($request->validated());

        redirect()->route('welcome.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Welcome $welcome): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('welcome.show.blade');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Welcome $welcome)
    {
        return view('welcome.edit.blade');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WelcomeRequest $request, Welcome $welcome): \Illuminate\Http\RedirectResponse
    {
        $welcome->update($request->validated());

        return redirect()->route('welcome.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Welcome $welcome): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $welcome->delete();

        redirect()->route('welcome.index');
    }
}
