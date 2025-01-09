<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platforms = Platform::orderBy('name')->get();
        return view('platform.index', compact('platforms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('platform.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Platform::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'logo'=>$request->file('logo')->store('logos', 'public'),
            'user_id' =>Auth::user()->id
        ]);

        return redirect(route('home'))->with('platformCreated', 'piattaforma creata correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Platform $platform)
    {
        return view('platform.show', compact('platform'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Platform $platform)
    {
        return view('platform.edit', compact('platform'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Platform $platform)
    {
        $platform->update(
            [
                'name'=>$request->name,
                'description'=>$request->description,
                'logo'=>$request->file('logo') ? $request->file('logo')->store('logos', 'public'): $platform->logo
            ]);
        return redirect(route('platform.index'))->with('platformUpdated', 'piattaforma modificata corretamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Platform $platform)
    {
        //
    }
}
