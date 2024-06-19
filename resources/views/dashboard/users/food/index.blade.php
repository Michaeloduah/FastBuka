@extends('layouts.user')

@section('content')
    <div class="container">
        <h1 class="text-center"><strong>User Dashboard</strong></h1>
        <h3 class=""><strong>All Available Foods</strong></h3>

        <form action="{{ route('user.dashboard.food.search') }}" method="GET" enctype="multipart/form-data">
            @csrf
            <input name="keyword" type="text" placeholder="Search">
            <button type="submit">Search</button>
        </form>
        <div class="my-5">
            @foreach ($foods as $food)
                <p><span class="fw-bolder">Food Category:</span> {{ $food->category->name }}</< /p>
                <p><span class="fw-bolder">Name:</span> {{ $food->name }}</p>
                <p><span class="fw-bolder">Description:</span> {{ $food->description }}</p>
                <p><span class="fw-bolder">Price:</span> {{ $food->price }}</p>
                <p><span class="fw-bolder">Discount:</span> {{ $food->discount }}</p>
                <p><span class="fw-bolder">Images</p>
                @foreach ($food->images as $image)
                    <img class="thumbnail m-5" width="15%" src="{{ asset('storage/images/foods/' . $image) }}"
                        alt="">
                @endforeach
                <a href="{{ route('user.dashboard.food.details', $food->id) }}"><button
                        class="btn btn-sm btn-outline-success m-1"><i class="bi bi-pencil-square"></i>More
                        Details</button></a>
                <form action="{{ route('user.dashboard.cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $food->id }}" name="food_id">
                    <input type="hidden" value="1" name="quantity">
                    <button class="btn btn-sm btn-outline-primary m-1"><i class="bi bi-pencil-square"></i>Add to
                        Cart</button>
                </form>
                <form action="{{ route('user.dashboard.wishlist.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $food->id }}" name="food_id">
                    <button class="btn btn-sm btn-outline-primary m-1"><i class="bi bi-pencil-square"></i>Add to
                        Favourite</button>
                </form>
                <hr>
            @endforeach
        </div>
    </div>
@endsection

{{-- @extends('layouts.dashboard')

@section('content')
    <div class="container">
        
    </div>
@endsection --}}
