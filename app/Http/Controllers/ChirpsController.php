<?php

namespace App\Http\Controllers;

use App\Models\Chirps;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ChirpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():Response
    {
        return Inertia::render( 'Chirps/Index', [
            //
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirps $chirps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirps $chirps)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirps $chirps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirps $chirps)
    {
        //
    }
}
