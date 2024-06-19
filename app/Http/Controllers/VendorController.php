<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('kyb.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $vendor = $request->validate([
            'business_name' => ['required', 'string', 'max:255'],
            'cac_number' => ['nullable', 'max:7', 'unique:' . Vendor::class],
            'business_country' => ['required', 'max:255',],
            'business_state' => ['required', 'max:255',],
            'business_city' => ['required', 'max:255',],
            'business_address' => ['required', 'max:255',],
            'opening_time' => ['required', 'max:255',],
            'closing_time' => ['required', 'max:255',],
        ]);

        
        $vendor = Vendor::create([
            'user_id' => $user->id,
            'business_name' => $request->business_name,
            'cac_number' => $request->cac_number,
            'business_country' => $request->business_country,
            'business_state' => $request->business_state,
            'business_city' => $request->business_city,
            'business_address' => $request->business_address,
            'opening_time' => $request->opening_time,
            'closing_time' => $request->closing_time,
        ]);
        
        $user->update(['account_type' => 'vendor']);
        
        return redirect()->intended(route('dashboard',  absolute: false));
        

    }

    /**
     * Display the specified resource.
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
