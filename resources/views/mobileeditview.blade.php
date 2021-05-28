@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/mobileeditprocess/{{ $mobiles->id }}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>
<h2>UPDATE MOBILE DETAILS</h2>
<br>
 <tr>
     <td>Model</td>
     <td><input value="{{ $mobiles->Model }}" name="Model" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Memory</td>
     <td><input value="{{ $mobiles->Memory }}" name="Memory" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Display</td>
     <td><input value="{{ $mobiles->Display }}" name="Display" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Camera</td>
     <td><input value="{{ $mobiles->Camera }}" name="Camera" type="text" class="form-control">
</td>
<tr>
     <td>Features</td>
     <td><input value="{{ $mobiles->Features }}" name="Features" type="text" class="form-control">
</td>
<tr>
     <td>Price</td>
     <td><input value="{{ $mobiles->Price }}" name="Price" type="text" class="form-control">
</td>
<tr>
     <td>Gallery</td>
     <td><input value="{{ $mobiles->Gallery }}" name="Gallery" type="text" class="form-control">
</td>
 </tr>


 <tr>
     <td></td>
     <td><center><button class="btn btn-success"> Save Changes </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection