<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\User;
use App\Models\CartItem;
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
        $categories = Category::all()->where('user_id', $user->id);
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
            'processing_time' => 'required',
            'ready_made' => 'required',
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
            'processing_time' => $request->input('processing_time'),
            'ready_made' => $request->input('ready_made'),
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
        $categories = Category::All()->where('user_id', $user->id);
        $food = Food::findOrFail($id);
        // dd($inCart);
        return view('dashboard.vendors.food.show', compact('user', 'categories', 'food',));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food, $id)
    {
        $user = auth()->user();
        $categories = Category::All()->where('user_id', $user->id);
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
            'name' => 'nullable',
            'description' => 'nullable',
            'image[]' => 'mimes:jpg,png,jpeg,svg',
            'price' => 'nullable',
            'discount' => 'nullable',
            'processing_time' => 'nullable',
            'ready_made' => 'nullable',
        ]);


        $fileNames = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                // Check if the image is valid
                if ($image->isValid()) {
                    $imageName = $image->hashName();
                    $image->store('images/foods', 'public');
                    $fileNames[] = $imageName;
                } else {
                    return('Invalid file upload');
                }
            }

            $images = $fileNames;
        } else {
            $images = $food->images; // Ensure $food->images is set correctly
        }

        $food->category_id = $request->category_id ?? $food->category_id;
        $food->name = $request->name ?? $food->name;
        $food->description = $request->description ?? $food->description;
        $food->price = $request->price ?? $food->price;
        $food->discount = $request->discount ?? $food->discount;
        $food->processing_time = $request->processing_time ?? $food->processing_time;
        $food->ready_made = $request->ready_made ?? $food->ready_made;
        $food->images = $images ?? $food->images;
        
        $food->save();

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
        $vendors = User::all()->where('account_type', 'vendor');
        $foods = Food::paginate(6);
        foreach ($foods as $food) {
            
            $inCart = CartItem::where('food_id', $food->id)->exists();
            $food->in_cart = $inCart;
        }
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.food.index', compact('user', 'foods', 'carts', 'inCart', 'cartitems', 'vendors'));
    }

    public function details(Food $food, $id)
    {
        $user = auth()->user();
        $categories = Category::All()->where('user_id', $user->id);
        $food = Food::findOrFail($id);
        // Check if the food ID exists in the cartitem table
        $inCart = CartItem::where('food_id', $id)->exists();
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        return view('dashboard.users.food.show', compact('user', 'categories', 'food', 'inCart', 'cartitems'));
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
