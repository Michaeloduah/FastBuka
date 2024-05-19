@extends('layouts.homepage')

@section('content')
    <h1 class="text-center">Login Page</h1>
    <div class="container">
        <form enctype="multipart/form-data" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            @if ($errors->has('email'))
                <span class="error">
                    <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('email') }}</span>
                </span>
            @endif
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            @if ($errors->has('password'))
                <span class="error">
                    <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('password') }}</span>
                </span>
            @endif
            <button type="submit" class="btn btn-primary">Submit</button>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

            </div>
        </form>
    </div>
@endsection
