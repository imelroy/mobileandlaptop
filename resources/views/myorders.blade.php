@extends("theme")
@section("content")

<div class="custom-orders">
<div class="order-details">
<h1><b>My Orders </h1><br>
     <div class="col-sm-10">
       
       
       @foreach($morders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="mobiledetail/{{$item->id}}">
                
                    <img class="trending-image" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>Model : {{$item->Model}}</h3>
                      <h5>Order Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      

                    </div>
                    <div class="col-sm-3">
                  
             <div class="remove">
             <form action="/mcancelorder/{{$item->id}}" method="post">
             {{csrf_field() }}
                <a href="/mcancelorder/{{$item->id}}/delete" class="btn btn-warning order-cancel" >Cancel order</a>
                </form>  
             </div>
            </div>
             </div>
            
            </div>
            @endforeach
            @foreach($lorders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="laptopdropview/{{$item->id}}">
                    <img class="trending-image" src="{{$item->Gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h3>Model : {{$item->Model}}</h3>
                      <h5>Order Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      

                    </div>
                  <div class="col-sm-3">
             <div class="remove">
             <form action="/lcancelorder/{{$item->id}}" method="post">
             {{csrf_field() }}
             <a href="/lcancelorder/{{$item->id}}/delete" class="btn btn-warning order-cancel" >Cancel order</a>
             </form>
             </div>

            </div>
             </div>
            
            </div>
            @endforeach
            
          </div>

     </div>
</div>
@endsection 