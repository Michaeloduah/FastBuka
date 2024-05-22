<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $foods = Food::All()->where('user_id', $user->id);
        return view('dashboard.vendors.food.index', compact('user', 'foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        $categories = Category::all();
        return view('dashboard.vendors.food.create', compact('user', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image[]' => 'mimes:jpg,png,jpeg,svg',
            'price' => 'required',
            'discount' => 'required',
        ]);

        $fileNames = [];
        foreach ($request->file('image') as $image) {
            $imageName = $image->hashName();
            $image->store('images/foods', 'public');
            $fileNames[] = $imageName;
        }

        $images = $fileNames;
        $user = auth()->user()->id;

        $food = Food::create([
            'user_id' => $user,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'images' => $images,
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
        ]);
        // dd($food);

        return redirect()->intended(route('vendor.dashboard.food.index',  absolute: false));
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food, $id)
    {
        $user = auth()->user();
        $categories = Category::All();
        $food = Food::findOrFail($id);
        return view('dashboard.vendors.food.show', compact('user', 'categories', 'food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food, $id)
    {
        $user = auth()->user();
        $categories = Category::All();
        $food = Food::findOrFail($id);
        return view('dashboard.vendors.food.edit', compact('user', 'categories', 'food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $food = Food::findOrFail($id);
        $valid = $request->validate([
            'category_id' => 'nullable',
            'name' => 'nullable',
            'description' => 'nullable',
            'image[]' => 'mimes:jpg,png,jpeg,svg',
            'price' => 'nullable',
            'discount' => 'nullable',
        ]);

        $food->name = $request->name ?? $food->name;
        $food->description = $request->description ?? $food->description;
        $food->price = $request->price ?? $food->price;
        $food->discount = $request->discount ?? $food->discount;


        $fileNames = [];
        if ($request->hasFile('image[]')) {
            foreach ($request->file('image') as $image) {
                $imageName = $image->hashName();
                $image->store('images/foods', 'public');
                $fileNames[] = $imageName;
            }

            $images = $fileNames;
        } else {
            $images = $food->images;
        }
        $user = auth()->user()->id;

        $update = [
            'user_id' => $user,
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'images' => $images,
            'price' => $request->input('price'),
            'discount' => $request->input('discount'),
        ];
        $food->update($update);

        return redirect()->intended(route('vendor.dashboard.food.index',  absolute: false));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food, $id)
    {
        $food = Food::findOrFail($id);
        $food->delete();
        return redirect()->back()->with('message', 'Message deleted Successfully');
    }

    public function allFood()
    {
        $user = auth()->user();
        $foods = Food::All();
        $carts = Cart::all()->where('user_id', $user->id);
        return view('dashboard.users.food.index', compact('user', 'foods', 'carts'));
    }

    public function details(Food $food, $id)
    {
        $user = auth()->user();
        $categories = Category::All();
        $food = Food::findOrFail($id);
        return view('dashboard.users.food.show', compact('user', 'categories', 'food'));
    }

    public function search(Request $request)
    {
        $user = auth()->user();
        $search = $request->validate([
            'keyword' => 'required',
        ]);


        $foods = Food::where('name', 'LIKE', "%$request->keyword%")->get();
        $users = User::where('name', 'LIKE', "%$request->keyword%")
            ->where('account_type', 'vendor')
            ->get(['name', 'email', 'phone', 'address', 'image']);
        // dd($users, $foods);
        return view('dashboard.users.food.result', compact('users', 'foods'));
    }
}
