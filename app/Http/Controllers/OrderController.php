<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Food;
use App\Models\Order;
use App\Models\CartItem;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $orders = Order::All()->where('vendor_id', $user->id);

        return view('dashboard.vendors.order.index', compact('user', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**$
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            $carts = Cart::all()->where('user_id', auth()->user()->id);
            foreach ($carts as $cart)
                $id = $cart->id;
            $cartItems = CartItem::all()->where('cart_id', $id);

            $order = $request->validate([
                'order_number' => ['unique:orders'],
                // 'total_amount' => ['required'],
                'shipping_address' => ['required'],
            ]);

            function generateOrderNumber($length = 30)
            {
                // Characters to be included in the random string
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $orderNumber = '';
                // Generate random string
                for ($i = 0; $i < $length; $i++) {
                    $orderNumber .= $characters[rand(0, $charactersLength - 1)];
                }
                return $orderNumber;
            }

            $order_number = generateOrderNumber();
            $status = "Pending";

            foreach ($cartItems as $cartItem) {
                $vendor = $cartItem->food->user_id;
            }

            $order = Order::create([
                'user_id' => auth()->user()->id,
                'vendor_id' => $vendor,
                'order_number' => $order_number,
                'status' => $status,
                'total_amount' => 0,
                'shipping_address' => auth()->user()->address,
                'payment_method' => "Pending",
                'payment_status' => "Pending",
            ]);



            $totalAmount = 0;

            foreach ($cartItems as $cartItem) {
                $food = $cartItem->food;
                $quantity = $cartItem->quantity;
                $price = $food->price * $quantity;

                $orderitem = OrderItem::create([
                    'order_id' => $order->id,
                    'food_id' => $food->id,
                    'quantity' => $quantity,
                    'price' => $price,
                ]);

                // Update total amount
                $totalAmount += $price;
            }

            // Update order total amount
            $order->update(['total_amount' => $totalAmount]);


            // Commit the transaction
            DB::commit();

            return redirect(route('dashboard', absolute: false));
        } catch (\Exception $e) {
            // Rollback the transaction if something goes wrong
            DB::rollBack();
            return response()->json(['message' => 'Order placement failed!', 'error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
