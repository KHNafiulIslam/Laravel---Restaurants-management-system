@extends('layouts.layout')

@section('content')
            <div class="wrapper fish-details">
                <h1>Oder for {{ $fish->cus_name }}</h1>
                <p class="type">Address - {{ $fish->address }}<br>
                Contact - {{ $fish->phone_number }}<br>
                Type - {{ $fish->name }}<br>
                Base - {{ $fish->type}}</p>
                <form action="/fishes/{{$fish->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Complete order</button>
                </form>
            </div>
            <a href="/fishes" class="back">Back to all fish</a>
@endsection