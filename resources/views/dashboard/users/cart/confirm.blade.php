@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">User Dashboard</h1>
        <h3>Confirm Order</h3>

        <form class="my-5" action="{{ route('user.dashboard.order.store') }}" method="POST" enctype="multipart/form-data">
            @foreach ($cartitems as $cartitem)
            @csrf
                <p>{{ $cartitem->food->name }}</p>
                <img class="thumbnail m-5" width="10%"
                    src="{{ asset('storage/images/foods/' . $cartitem->food->images[0]) }}" alt=""><br>
                <p>Price: {{ $cartitem->food->price }}</p>
                {{-- <input class="form-control" type="hidden" id="price" name="food_id" value="{{ $cartitem->food->id }}">
                <input class="form-control" type="hidden" id="price" name="price" value="{{ $cartitem->food->price }}"> --}}
                <label for="Quantity" class="form-label">Quantity:</label>
                <input class="form-control" type="number" id="Quantity" name="food[{{$x++}}][quantity]" min="1">
                <hr>
            @endforeach
            <label for="Address" class="form-label">Address:</label>
            <input class="form-control" type="text" id="Address" name="shipping_address">
            <input type="hidden" name="order_number" id="order_number">
            <input type="hidden" name="total_amount" value="5000000">
            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Place Order</button>
        </form>
    </div>
@endsection




{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">

    </div>
@endsection --}}
