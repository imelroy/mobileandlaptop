@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="mobiledropview-img" src="{{$mobile['Gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/mobile">Go Back</a>
       <h2><b>{{$mobile['Model']}}</h2>
       <h3>Price : {{$mobile['Price']}}</h3>
       <h4>Memory: {{$mobile['Memory']}}</h4>
       <h4>Display: {{$mobile['Display']}}</h4>
       <h4>Camera: {{$mobile['Camera']}}</h4>
       <h4>Features: {{$mobile['Features']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$mobile['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       
       <br><br>
</div>
</div>
</div>

@endsection