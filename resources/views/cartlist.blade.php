@extends("theme")
@section("content")
<div class="custom-mobile">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>Cart Products</h1>
            <a class="btn btn-success button" href="ordernow">Order Now</a> <br> <br>
            @foreach($mobiles as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="mobiledetail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->Model}}</h2>
                      <h5>{{$item->Memory}}</h5>
                    </div>
             </div>
             <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove from Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success sobutton" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
@endsection 