<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;

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
        if ($user = auth()->user()) {


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

            dd($vendor);

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

            return redirect(route('dashboard', absolute: false));
        } else {
            $vendor = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'phone' => 'required|unique:users,phone',
                'address' => 'required|max:255',
                'password' => 'required|min:8',
                'confirmpassword' => 'required|same:password',
                'business_name' => ['required', 'string', 'max:255'],
                'cac_number' => ['nullable', 'max:7', 'unique:' . Vendor::class],
                'business_country' => ['required', 'max:255',],
                'business_state' => ['required', 'max:255',],
                'business_city' => ['required', 'max:255',],
                'business_address' => ['required', 'max:255',],
                'opening_time' => ['required', 'max:255',],
                'closing_time' => ['required', 'max:255',],
            ]);

            // dd($vendor);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'account_type' => 'vendor',
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

            event(new Registered($user));

            Auth::login($user);

            return redirect(route('dashboard', absolute: false));
        }
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
