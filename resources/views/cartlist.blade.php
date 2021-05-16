@extends("theme")
@section("content")
<div class="container">
    <div class=" row  cart-list-deviderr"> 
    <div class="col-sm-10">
        <div class="trending-wrapperr">
            <h1><b>Cart Products</h1>
            
            <a class="btn btn-success button" href="ordernow">Order Now</a>
            <a href="/home">Go Back</a> <br> <br>
            @foreach($mobiles as $item)
            <div class="col-sm-3">
                <a href="mobiledetail/{{$item->id}}">
                    <img class="trending-imagee" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="product-details">
                      <h2>{{$item->Model}}</h2>
                      <h5>{{$item->Memory}}</h5>
                      <h5>Price : {{$item->Price}}</h5>
                    <br>
                    </div>
             </div>
             <div class="col-sm-3  ">
             <div class="remove">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
                <br>
             </div>
            </div>
            </div>
            @endforeach
            @foreach($laptops as $item)
             <div class="col-sm-3">
                <a href="mobiledetail/{{$item->id}}">
                    <img class="trending-imagee" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->Model}}</h2>
                      <h5>{{$item->Memory}}</h5>
                      <h5>Price : {{$item->Price}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
             <div class="remove">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div></div>
            @endforeach
           
          </div>
          <a class="btn btn-success sobutton" href="ordernow">Order Now</a> <br> <br>

     </div>
     
</div>

@endsection 


