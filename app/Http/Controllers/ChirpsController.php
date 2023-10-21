<?php

namespace App\Http\Controllers;

use App\Models\Chirps;
use Illuminate\Http\RedirectResponse;
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
    public function store(Request $request):RedirectResponse
    {
        // use laravel to validate the chirp
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        
        // associate the chirp with the user who made the request, in this case
        // the user submiting the chirp.
        $request->user()->chirps()->create($validated);

        // return a redirect reponse, in this case it informs inertia to reload
        // 'chirps.index' route.
        return redirect(route('chirps.index'));
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
