@extends('layouts.homepage')

@section('content')
    <div class="container">
        
        <h1 class="text-center">Forgotten Password</h1>
        <form enctype="multipart/form-data" method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <div class="flex items-center justify-end mt-4">
                {{-- <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button> --}}
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection