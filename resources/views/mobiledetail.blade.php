@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="mobiledetail-img" src="{{$home['Gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/home">Go Back</a>
       <h2><b>{{$home['Model']}}</h2>
       <h3>Price : {{$home['Price']}}</h3>
       <h4>Memory: {{$home['Memory']}}</h4>
       <h4>Display: {{$home['Display']}}</h4>
       <h4>Camera: {{$home['Camera']}}</h4>
       <h4>Features: {{$home['Features']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$home['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       
       <br><br>
</div>
</div>
</div>

@endsection