@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/laptopread" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>
<h2>ADD LAPTOP</h2>
<br>
 <tr>
     <td>Model</td>
     <td><input name="Model" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Memory</td>
     <td><input name="Memory" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Display</td>
     <td><input name="Display" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Platform</td>
     <td><input name="Platform" type="text" class="form-control">
</td>
<tr>
     <td>Processor</td>
     <td><input name="Processor" type="text" class="form-control">
</td>
<tr>
     <td>Graphics</td>
     <td><input name="Graphics" type="text" class="form-control">
</td>
<tr>
     <td>Price</td>
     <td><input name="Price" type="text" class="form-control">
</td>
<tr>
     <td>Gallery</td>
     <td><input name="Gallery" type="text" class="form-control">
</td>
 </tr>


 <tr>
     <td></td>
     <td><center> <button class="btn btn-success"> UPLOAD </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection