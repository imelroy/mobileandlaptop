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
    <td><select class="form-select" value="{{ $mobiles->Memory }}" aria-label="Default select example" name="Memory">
          <option selected value="3GB">3GB</option>
            <option value="4GB">4GB</option>
              <option value="6GB">6GB</option>
              <option value="8GB">8GB</option>
              <option value="12GB">12GB</option>
              <option value="16GB">16GB</option>
       </select></td> 
</tr>
 
    <td>Display</td>
    <td><select class="form-select" value="{{ $mobiles->Display }}"  aria-label="Default select example" name="Display">
          <option selected value="4.7 inch">4.7 inch</option>
            <option value="5.5 inch">5.5 inch</option>
              <option value="5.99 inch">5.99 inch</option>
              <option value="6 inch">6 inch</option>
              <option value="6.1 inch">6.1 inch</option>
              <option value="6.5 inch">6.5 inch</option>
              <option value="6.7 inch">6.7 inch</option>
              <option value="6.78 inch">6.78 inch</option>
              <option value="6.8 inch">6.8 inch</option>
              <option value="6.9 inch">6.9 inch</option>
              <option value="6.98 inch">6.98 inch</option>
              <option value="7 inch">7 inch</option>
       </select></td> 
</tr>
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