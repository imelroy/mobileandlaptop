@extends("admintheme")
@section("contentdata")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">



<form action="/laptopeditprocess/{{ $laptops->id }}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">
<center>
<br><br><br>
<h2>UPDATE LAPTOP DETAILS</h2>
<br>
 <tr>
     <td>Model</td>
     <td><input value="{{ $laptops->Model }}" name="Model" type="text" class="form-control">
     </td>
 </tr>
 
 <tr>
    <td>Memory</td>
    <td><select class="form-select" value="{{ $laptops->Memory }}" aria-label="Default select example" name="Memory">
          <option selected value="4GB RAM 1TB HDD">4GB RAM 1TB HDD</option>
            <option value="8GB RAM 256GB SSD">8GB RAM 256GB SSD</option>
              <option value="8GB RAM 500GB SSD">8GB RAM 500GB SSD</option>
              <option value="8GB RAM 512GB SSD">8GB RAM 512GB SSD</option>
              <option value="8GB RAM, 256GB SSD, 512GB HDD">8GB RAM 256GB SSD 512GB HDD</option>
              <option value="8GB RAM 1TB M.2 NVMe PCIe 3.0 SSD">8GB RAM 1TB M.2 NVMe PCIe 3.0 SSD</option>
              <option value="16GB RAM 1TB HDD 256GB SSD">16GB RAM 1TB HDD 256GB SSD</option>
              <option value="16GB RAM 1TB M.2 NVMe PCIe 3.0 NVMe SSD">16GB RAM 1TB M.2 NVMe PCIe 3.0 NVMe SSD</option>
              <option value="64GB RAM 1TB M.2 NVMe PCIe 3.0 NVMe SSD">64GB RAM 1TB M.2 NVMe PCIe 3.0 NVMe SSD</option>
       </select></td> 
</tr>
 
 <tr>
    <td>Display</td>
    <td><select class="form-select" value="{{ $laptops->Display }}" aria-label="Default select example" name="Display">
          <option selected value="12.3 inch">12.3 inch</option>
            <option value="12.5 inch">12.5 inch</option>
              <option value="13.3 inch">13.3 inch</option>
              <option value="13.4 inch">13.4 inch</option>
              <option value="13.4 inch (Touch)">13.4 inch (Touch)</option>
              <option value="13.5 inch">13.5 inch</option>
              <option value="14 inch">14 inch</option>
              <option value="15.6 inch">15.6 inch</option>
              <option value="17 inch">17 inch</option>
              <option value="17 inch (Touch)">17 inch (Touch)</option>
              <option value="17.3 inch">17.3 inch</option>
              
       </select></td> 
</tr>
 
<tr>
    <td>Platform</td>
    <td><select class="form-select" value="{{ $laptops->Platform }}" aria-label="Default select example" name="Platform">
          <option selected value="Windows 11">Windows 11</option>
              <option value="Windows 10 Home">Windows 10 Home</option>
              <option value="Windows 10 Pro">Windows 10 Pro</option>
              <option value="Windows 8.1">Windows 8.1</option>
              <option value="Windows 7">Windows 7</option>
              <option value="Mac Os">Mac Os</option>
              <option value="Linux">Linux</option>
              <option value="Chrome">Chrome</option>
              <option value="DOS">DOS</option>
       </select></td> 
</tr>

<tr>
    <td>Processor</td>
    <td><select class="form-select" value="{{ $laptops->Processor }}" aria-label="Default select example" name="Processor">
          <option selected value="Intel Core i9 processor-10th Gen">Intel Core i9 processor-10th Gen</option>
          <option value="Intel Core i7 processor-10th Gen">Intel Core i7 processor-10th Gen</option>
          <option value="Intel Core i7 8th Gen">Intel Core i7 8th Gen</option>
          <option value="Intel Core i5 processor-10th Gen">Intel Core i5 processor-10th Gen</option>
              <option value="Intel Core i5 8th Gen">Intel Core i5 8th Gen</option>
              <option value="Intel Evo 11th Generation">Intel Evo 11th Generation</option>
              <option value="AMD Ryzen 9">AMD Ryzen 9</option>
              <option value="AMD Ryzen 7">AMD Ryzen 7</option>
              <option value="AMD Ryzen 5">AMD Ryzen 5</option>
              <option value="Apple M1 chip">Apple M1 chip</option>
       </select></td> 
</tr>

<tr>
    <td>Graphics</td>
    <td><select class="form-select" value="{{ $laptops->Graphics }}" aria-label="Default select example" name="Graphics">
          <option selected value="Nvidia GeForce RTX 3060">Nvidia GeForce RTX 3060</option>
          <option value="NVIDIA GeForce GTX 1650Ti">NVIDIA GeForce GTX 1650Ti</option>
          <option value="NVIDIA GeForce RTX 2080 SUPER  8GB VRAM">NVIDIA GeForce RTX 2080 SUPER  8GB VRAM</option>
          <option value="AMD Radeon Pro">AMD Radeon Pro</option>
              <option value="AMD Radeon R7">AMD Radeon R7</option>
              <option value="AMD Radeon R5">AMD Radeon R5</option>
              <option value="AMD Radeon RX 500">AMD Radeon RX 500</option>
              <option value="Intel UHD Graphics 620">Intel UHD Graphics 620</option>
              <option value="Intel Iris Plus">Intel Iris Plus</option>
              <option value="Intel Iris Xe">Intel Iris Xe</option>
              <option value="Intel Integrated Iris Plus Graphics 645">Intel Integrated Iris Plus Graphics 645</option>
              <option value="Apple 8-core GPU">Apple 8-core GPU</option>
       </select></td> 
</tr>
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
     <td><center> <button class="btn btn-success"> Save Changes </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>
@endsection