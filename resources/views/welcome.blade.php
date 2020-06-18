@extends('layouts.layout')
@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
            <img src="/img/fish.png" alt="fish image">
                <div class="title m-b-md">
                    DaFish Restaurant <br/>
                </div>
                <p class="mssg">{{session('msg')}}</p>
                <a href="/fishes/create">Order a fish</a>
            </div>
        </div>
@endsection