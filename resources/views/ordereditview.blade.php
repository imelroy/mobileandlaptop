@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/ordereditprocess/{{ $order->id }}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>

 <tr>
     <td>product_id</td>
     <td><input value="{{ $order->product_id }}" name="product_id" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>user_id</td>
     <td><input value="{{ $order->user_id }}" name="user_id" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>status</td>
     <td><input value="{{ $order->status }}" name="status" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>payment_method </td>
     <td><input value="{{ $order->payment_method }}" name="payment_method" type="text" class="form-control">
</td>
<tr>
     <td>payment_status</td>
     <td><input value="{{ $order->payment_status }}" name="payment_status" type="text" class="form-control">
</td>
<tr>
     <td>address</td>
     <td><input value="{{ $order->address }}" name="address" type="text" class="form-control">
</td>

 </tr>


 <tr>
     <td></td>
     <td><center><button class="btn btn-success"> Save  </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection