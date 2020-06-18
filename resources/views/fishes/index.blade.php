@extends('layouts.app')

@section('content')

            <div class="wrapper fish-index">
                <div class="title m-b-md">
                    Fishes orders
                    </div>
                    @foreach($fishes as $fish)
                    <div class="fish-item">
                     <img src="/img/food.png">
                    <h4><a href="/fishes/{{ $fish->id }}">{{ $fish->name }} - {{ $fish->type }}</a></h4>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection