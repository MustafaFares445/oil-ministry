<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $contacts =Contact::all()->makeHidden(['created_at' , 'updated_at']);
        return $this->successResponse(data: $contacts);
    }
    /**
     * Display the specified resource.
     */
    public function show(Contact $contact): JsonResponse
    {
        return $this->successResponse(data: $contact);
    }
}
