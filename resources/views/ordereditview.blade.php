@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/ordereditprocess/{{ $order->id }}" method="post">

{{ csrf_field() }}
<br><br>
<h2><center>ORDER UPDATE</H2>
<br>
<table class="table table-borderless">
<center>
<br>

 <tr>
     <td>Product ID</td>
     <td><input value="{{ $order->product_id }}" name="product_id" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>User ID</td>
     <td><input value="{{ $order->user_id }}" name="user_id" type="text" class="form-control">
</td>
 </tr>

 <tr>
    <td>Status</td>
    <td><select class="form-select" value="{{ $order->status }}" aria-label="Default select example" name="status">
              <option selected value="Getting order ready">Getting order ready</option>
              <option value="Out for Delivery">Out for Delivery</option>
              <option value="Delivered">Delivered</option>
              <option value="Pending payment">Pending payment</option>
              <option value="Failed">Failed</option>
              <option value="Refunded">Refunded</option>
              <option value="Cancelled">Cancelled</option>
       </select></td> 
</tr>
 <tr>
     <td>Payment Method </td>
     <td><input value="{{ $order->payment_method }}" name="payment_method" type="text" class="form-control">
</td>

<tr>
    <td>Payment Status</td>
    <td><select class="form-select" aria-label="Default select example" name="payment_status">
          <option selected value="Success">Success</option>
              <option value="Pending">Pending</option>
              <option value="Cancelled">Cancelled</option>
              <option value="Rejected">Rejected</option>
       </select></td> 
</tr>
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