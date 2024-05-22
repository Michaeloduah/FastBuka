@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">Vendor Dashboard</h1>
        <h3>Your Profile</h3>
        <ul>
            <li>Full Name: {{ $user->name }}</li>
            <li>Email Address: {{ $user->email }}</li>
            <li>Phone Number: {{ $user->phone }}</li>
            <li>Address: {{ $user->address }}</li>
        </ul>
        <hr>
        <h3>Features</h3>
        <ol>
            <li><a class="text-decoration-none" href="{{ route('vendor.dashboard.editprofile') }}">Edit Profile</a></li>
            
            <span>Products/Food</span>
            <dl>
                <li><a class="text-decoration-none" href="{{ route('vendor.dashboard.category.index') }}"> View Categories </a></li>
                <li><a class="text-decoration-none" href="{{ route('vendor.dashboard.category.create') }}"> Add new Category </a></li>
                <li><a class="text-decoration-none" href="{{ route('vendor.dashboard.food.index') }}"> View Foods </a></li>
                <li><a class="text-decoration-none" href="{{ route('vendor.dashboard.food.create') }}"> Add new Food </a></li>
            </dl>
        </ol>

        <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-danger"> Logout</button>
        </form>
    </div>
@endsection