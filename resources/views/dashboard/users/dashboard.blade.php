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
        </ul>
        <hr>
        <h3>Features</h3>
        <ol>
            <li><a class="text-decoration-none" href="{{ route('user.dashboard.editprofile') }}">Edit Profile</a></li>
            {{-- <li><a class="text-decoration-none" href="{{ route('logout') }}">Logout</a></li> --}}
        </ol>

        <form action="{{ route('logout') }} " method="POST">
            @csrf
            <button class="btn btn-sm btn-outline-danger"> Logout</button>
        </form>
    </div>
@endsection