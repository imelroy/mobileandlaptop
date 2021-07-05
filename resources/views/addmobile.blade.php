@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">


<form action="/mobileread" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>
<h2>ADD MOBILE</h2>
<br>
 <tr>
     <div class="form-group">
     <td>Model</td>
     <td><input name="Model" type="text" class="form-control">
     <span class="text-danger">@error('Model') {{ $message }} @enderror</span>
     </td>
     </div>
 </tr>
 <tr>
    <td>Memory</td>
    <td><select class="form-select" aria-label="Default select example" name="Memory">
          <option selected value="3GB 64GB">3GB 64GB</option>
          <option value="3GB 128GB">3GB 128GB</option>
          <option value="3GB 256GB">3GB 256GB</option>
          <option value="4GB 64GB">4GB 64GB</option>
          <option value="4GB 128GB">4GB 128GB</option>
          <option value="4GB 256GB">4GB 256GB</option>
          <option value="4GB 512GB">4GB 512GB</option>
          <option value="6GB 64GB">6GB 64GB</option>
          <option value="6GB 128GB">6GB 128GB</option>
          <option value="6GB 256GB">6GB 256GB</option>
          <option value="6GB 512GB">6GB 512GB</option>
          <option value="8GB 64GB">8GB 64GB</option>
          <option value="8GB 128GB">8GB 128GB</option>
          <option value="8GB 256GB">8GB 256GB</option>
          <option value="8GB 512GB">8GB 512GB</option>
          <option value="12GB 64GB">12GB 64GB</option>
          <option value="12GB 128GB">12GB 128GB</option>
          <option value="12GB 256GB">12GB 256GB</option>
          <option value="12GB 512GB">12GB 512GB</option>
          <option value="16GB 64GB">16GB 64GB</option>
          <option value="16GB 128GB">16GB 128GB</option>
          <option value="16GB 256GB">16GB 256GB</option>
          <option value="16GB 512GB">16GB 512GB</option>
       </select></td> 
</tr>

 <tr>
    <td>Display</td>
    <td><select class="form-select" aria-label="Default select example" name="Display">
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
 
 <tr>
     <td>Camera</td>
     <td><input name="Camera" type="text" class="form-control">
</td>
<tr>
     <td>Features</td>
     <td><input name="Features" type="text" class="form-control">
</td>
<tr>
     <td>Price</td>
     <td><input name="Price" type="text" class="form-control">
</td>

<tr>
     <div class="form-group">
     <td>Gallery</td>
     <td><input name="Gallery" type="text" class="form-control">
     <span class="text-danger">@error('Image Link') {{ $message }} @enderror</span>
     </div>
</td>
 </tr>


 <tr>
     <td></td>
     <td><center><button class="btn btn-success"> UPLOAD </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection