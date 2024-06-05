@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">User Dashboard</h1>
        <h3>Confirm Order</h3>

        <form class="my-5" action="{{ route('user.dashboard.order.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @foreach ($cartitems as $cartitem)
                <p>{{ $cartitem->food->name }}</p>
                <img class="thumbnail m-5" width="10%"
                    src="{{ asset('storage/images/foods/' . $cartitem->food->images[0]) }}" alt=""><br>
                <p>Price: {{ $cartitem->food->price }}</p>
                <label for="Quantity" class="form-label">Quantity: {{ $cartitem->quantity }}</label>
                {{-- <input class="form-control" type="number" id="Quantity" name="foods[{{ $loop->index }}][quantity]" min="1"> --}}
                <hr>
            @endforeach
            <label for="Address" class="form-label">Address:</label>
            <input class="form-control" type="text" name="shipping_address">
            <input type="hidden" name="order_number">
            <input type="hidden" name="total_amount">
            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Place Order</button>
        </form>
    </div>
@endsection




{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">

    </div>
@endsection --}}
