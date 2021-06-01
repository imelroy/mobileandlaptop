@extends("admintheme")
@section("contentdata")

<div class="container">
<div class="row">


<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<br><br>
<h2><center>ORDERS</H2>
<br><br>
  <table class="table table-borderless">
  
    <tr>
    <th>Order Id</th>
    <th>Product Id</th>
    <th>User id</th>
    <th>Status</th>
    <th>Payment Method</th>
    <th>Payment status</th>
    <th>Address</th>
    <th>Order Date</th>
     </tr>


@foreach($order as $customerorderlist)
     <tr>
        <td> {{  $customerorderlist->id }} </td>
        <td> {{  $customerorderlist->product_id }} </td>
        <td> {{  $customerorderlist->user_id }} </td>
        <td> {{  $customerorderlist->status }} </td>
        <td> {{  $customerorderlist->payment_method }} </td>
        <td> {{  $customerorderlist->payment_status }} </td>
        <td> {{  $customerorderlist->address }} </td>
        <td> {{  $customerorderlist->created_at }} </td>
        <td> <a class="btn btn-warning" href="/customerorderlist/{{$customerorderlist->id}}/editcustomerorders">Update product</a> </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>

</div>
</div>
    
@endsection