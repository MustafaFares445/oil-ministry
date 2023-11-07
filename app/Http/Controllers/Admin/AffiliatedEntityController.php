<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AffiliatedEntityRequest;
use App\Models\AffiliatedEntity;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AffiliatedEntityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $affiliatedEntities = AffiliatedEntity::all();

        return view('admin.pages.AffiliatedEntities.index' , compact('affiliatedEntities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.pages.AffiliatedEntities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AffiliatedEntityRequest $request): \Illuminate\Http\RedirectResponse
    {
        AffiliatedEntity::create($request->validated());

        return redirect()->route('affiliated-entities.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(AffiliatedEntity $affiliatedEntity): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('affiliated-entities.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AffiliatedEntity $affiliatedEntity): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.pages.AffiliatedEntities.edit' , compact('affiliatedEntity'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AffiliatedEntityRequest $request, AffiliatedEntity $affiliatedEntity): \Illuminate\Http\RedirectResponse
    {

        $affiliatedEntity->update($request->validated());


       return redirect()->route('affiliated-entities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AffiliatedEntity $affiliatedEntity): \Illuminate\Http\RedirectResponse
    {
        $affiliatedEntity->delete();

        return redirect()->route('affiliated-entities.index');
    }
}
