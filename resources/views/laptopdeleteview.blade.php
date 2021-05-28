@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">



<form action="/laptopdeleteprocess/{{ $laptops->id }}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>

 <tr>
     <td>Model</td>
     <td><input value="{{ $laptops->Model }}" name="Model" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Memory</td>
     <td><input value="{{ $laptops->Memory }}" name="Memory" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Display</td>
     <td><input value="{{ $laptops->Display }}" name="Display" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Platform</td>
     <td><input value="{{ $laptops->Platform }}" name="Platform" type="text" class="form-control">
</td>
<tr>
     <td>Processor</td>
     <td><input value="{{ $laptops->Processor }}" name="Processor" type="text" class="form-control">
</td>
<tr>
     <td>Graphics</td>
     <td><input value="{{ $laptops->Graphics }}" name="Graphics" type="text" class="form-control">
</td>
<tr>
     <td>Price</td>
     <td><input value="{{ $laptops->Price }}" name="Price" type="text" class="form-control">
</td>
<tr>
     <td>Gallery</td>
     <td><input value="{{ $laptops->Gallery }}" name="Gallery" type="text" class="form-control">
</td>
 </tr>


 <tr>
     <td></td>
     <td><center> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger"> DELETE  </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection