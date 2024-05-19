<?php

namespace App\Http\Controllers;

use view;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    //
    public function adminDashboard()
    {
        $user = auth()->user();
        return view('dashboard.admin.dashboard', compact('user'));
    }

    public function vendorDashboard()
    {
        $user = auth()->user();
        return view('dashboard.vendors.dashboard', compact('user'));
    }

    public function userDashboard()
    {
        $user = auth()->user();
        return view('dashboard.users.dashboard', compact('user'));
    }

    public function editUserProfile()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.users.editprofile', compact('user'));
    }

    public function updateUserProfile(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'name' => ['nullable'],
            'email' => ['nullable', Rule::unique('users')->ignore($user)],
            'phone' => ['nullable', Rule::unique('users')->ignore($user)],
            'address' => ['nullable'],
            'password' => ['nullable', 'min:8'],
            'confirmpassword' => ['nullable', 'same:password', 'min:8'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('images/users', 'public');
        } else {
            $img_dir = NULL;
        }

        // Only update the fields that are not null
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->phone = $request->phone ?? $user->phone;
        $user->address = $request->address ?? $user->address;


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            // Save new image
            $imagePath = $request->file('image')->store('images/users', 'public');
            $user->image = $imagePath;
        }
        // dd($user);

        $user->save();

        return redirect(route('dashboard', absolute: false))->with('success', 'Profile updated successfully!');
    }

    public function editVendorProfile()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('dashboard.vendors.editprofile', compact('user'));
    }

    public function updateVendorProfile(Request $request, $id)
    {
        $user = User::findOrFail(auth()->user()->id);

        $request->validate([
            'name' => ['nullable'],
            'email' => ['nullable', Rule::unique('users')->ignore($user)],
            'phone' => ['nullable', Rule::unique('users')->ignore($user)],
            'address' => ['nullable'],
            'password' => ['nullable', 'min:8'],
            'confirmpassword' => ['nullable', 'same:password', 'min:8'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg']
        ]);

        if ($request->hasFile('image')) {
            $img_dir = $request->file('image')->store('images/users', 'public');
        } else {
            $img_dir = NULL;
        }

        // Only update the fields that are not null
        $user->name = $request->name ?? $user->name;
        $user->email = $request->email ?? $user->email;
        $user->phone = $request->phone ?? $user->phone;
        $user->address = $request->address ?? $user->address;


        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            // Save new image
            $imagePath = $request->file('image')->store('images/users', 'public');
            $user->image = $imagePath;
        }
        
        $user->save();

        return redirect(route('dashboard', absolute: false))->with('success', 'Profile updated successfully!');
    }
}
