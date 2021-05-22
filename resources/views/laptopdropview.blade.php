@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="laptopdropview-img" src="{{$laptop['Gallery']}}" alt="">
</div>
<div class="col-sm-6">
<a href="/laptop">Go Back</a>
       <h2><b>{{$laptop['Model']}}</h2>
       <h3>Price : {{$laptop['Price']}}</h3>
       <h4>Memory: {{$laptop['Memory']}}</h4>
       <h4>Display: {{$laptop['Display']}}</h4>
       <h4>Platform: {{$laptop['Platform']}}</h4>
       <h4>Processor: {{$laptop['Processor']}}</h4>
       <h4>Graphics: {{$laptop['Graphics']}}</h4>
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$laptop['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
   
       <br><br>
</div>
</div>
</div>

@endsection