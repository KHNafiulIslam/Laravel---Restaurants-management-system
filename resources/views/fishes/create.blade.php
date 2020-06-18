@extends('layouts.app')

@section('content')
       <div class="wrapper create-fish">
       <h1>Order a new fish</h1>
       <form action="/fishes" method="POST">
       @csrf
       <label for="cus_name">Your name: </label>
       <input type="text" id="cus_name" name="cus_name">
       
       <label for="address">Your address: </label>
       <input type="text" id="address" name="address">
       
       <label for="phone">Your phone number: </label>
       <input type="number" id="phone" name="phone">

       <label for="name">Choose fish name:</label>
       <select name="name" id="name">
       <option value="Tona">Tona</option> 
       <option value="Coral">Coral</option> 
       <option value="Selmon">Selmon</option> 
       <option value="Ilsha">Ilsha</option>
       <option value="Rupchada">Rupchada</option> 
       </select>
       <label for="type">Choose fish type:</label>
       <select name="type" id="type">
       <option value="BBQ">BBQ</option> 
       <option value="Fry">Fry</option> 
       <option value="Curry">Curry</option> 
       </select>
       <input type="submit" value="Order fish">
       </form>
       </div>
@endsection