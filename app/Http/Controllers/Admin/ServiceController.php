<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ServiceController extends Controller
{
    private string $path = "admin.pages.";

    /**
     * Display a listing of the resource.
     */
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $services = Service::all();

        return view($this->path.'services.index' , compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view($this->path . 'services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request): \Illuminate\Http\RedirectResponse
    {
        Service::create($request->validated());

        return redirect()->route($this->path . 'services.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view($this->path . 'services.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view($this->path . 'services.edit' , compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service): \Illuminate\Http\RedirectResponse
    {
        $service->update($request->validated());

        return redirect()->route($this->path . 'services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service): \Illuminate\Http\RedirectResponse
    {
        $service->delete();

        return redirect()->route($this->path . 'services.index');
    }
}
