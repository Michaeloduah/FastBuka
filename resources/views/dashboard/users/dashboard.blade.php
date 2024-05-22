@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">Users Dashboard</h1>
        <h3>Your Profile</h3>
        <ul>
            <li>Full Name: {{ $user->name }}</li>
            <li>Email Address: {{ $user->email }}</li>
            <li>Phone Number: {{ $user->phone }}</li>
            <li>Address: {{ $user->address }}</li>
            <img src="{{ asset('storage/'. $user->image)}}" width="15%" alt="" class="img-fluid">
        </ul>
        <hr>
        <h3>Features</h3>
        <ol>
            <li><a class="text-decoration-none" href="{{ route('user.dashboard.editprofile') }}">Edit Profile</a></li>
            <span>Products/Food</span>
            <li><a class="text-decoration-none" href="{{ route('user.dashboard.food.index') }}">All Foods</a></li>
            <span>Cart/Cart Items</span>
            <li><a href="{{ route('user.dashboard.cart.index') }}" class="text-decoration-none">My Cart</a></li>
            <span>Wishlist/Favourites</span>
            <li><a href="" class="text-decoration-none">My Favourite</a></li>
        </ol>

        <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-danger"> Logout</button>
        </form>
    </div>
@endsection