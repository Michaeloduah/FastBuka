<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\CartItem;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $foods = Food::all();
        $categories = Category::all()->where('user_id', $user->id);
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        // dd(count($cartitems));
        return view('dashboard.users.cart.index', compact('user', 'foods', 'categories', 'cartitems', 'carts', 'id'));
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
        $user = auth()->user();
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitem = $request->validate([
            'food_id' => ['required', 'unique:cart_items'],
            'quantity' => ['required'],
        ]);

        $cartitem = CartItem::create([
            'cart_id' => $id,
            'food_id' => $request->input('food_id'),
            'quantity' => $request->input('quantity'),
        ]);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cartitem = CartItem::findOrFail($id);
        $cartitem->delete();
        return redirect()->back();
    }

    public function confirm() {
        $user = auth()->user();
        $foods = Food::all();
        $categories = Category::all();
        $carts = Cart::all()->where('user_id', $user->id);
        foreach ($carts as $cart)
            $id = $cart->id;
        $cartitems = CartItem::all()->where('cart_id', $id);
        $x = 0;
        return view('dashboard.users.cart.confirm', compact('user', 'foods', 'categories', 'cartitems', 'carts', 'id', 'x',));
    }
}
