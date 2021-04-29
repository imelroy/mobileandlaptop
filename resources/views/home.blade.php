@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10 col-xxl-10">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://cdn.opstatics.com/store/20170907/assets/images/events/2021/03/9pro/en/ksp-gallery-group1-1-f65fb8.jpg.webp" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>OnePlus 9 Pro</h3>
        <p>Your Best Shot</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://m.media-amazon.com/images/S/aplus-media/vc/1cedfb92-7185-4560-a43c-a6d49b7a0dd1.__CR0,25,1464,600_PT0_SX1464_V1___.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Samsung S20 Ultra</h5>
        <p>This is the phone that will change photography.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/1242x450-intel._CB654609884_SY500_.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Inspiron 5406 </h5>
        <p>Versatile views on the go</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Laptops/April/Grand-Gaming-Days/1242x450-Acer._CB654410399_SY500_.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Acer Nitro 5</h5>
        <p>Pro gaming partner</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://media.flixsyndication.net/sis/7228/915/en_sg/img/offers/surface.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Surface pro 4</h5>
        <p>Built for Extra</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
<form action="/registerread" method="post">
{{  csrf_field()  }}
<table class="table table-borderless">
<br><br>
<h3><center><b>Register User</h3>
<tr>
  <td>Username</td>
  <td><input name="username" type="text" class="form-control"></td>
</tr>
<tr>
  <td>Name</td>
  <td><input name="name" type="text" class="form-control"></td>
</tr>
<tr>
  <td>Email</td>
  <td><input name="email" type="text" class="form-control"></td>
</tr>
<tr>
  <td>Phone</td>
  <td><input name="phone" type="text" class="form-control"></td>
</tr>
<tr>
  <td>Password</td>
  <td><input name="password" type="password" class="form-control"></td>
</tr>
<tr>
  <td></td>
  <td><button class="btn btn-success">Sign up</button></td>
</tr>
</table>


</div>

</div>

</div>
@endsection