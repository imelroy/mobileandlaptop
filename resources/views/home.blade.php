@extends("theme")
@section("content")
<div class="custom-mobiles">
<title>Home</title>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach($mobiles as $item)
        <div class="item {{$item['id']==1?'active':''}}">
        <a href="mobiledetail/{{$item['id']}}">
              <img class="slider-img" src="{{$item['Gallery']}}">
            <div class="carousel-caption slider-text-dark">
              <h3>{{$item['Model']}}</h3>
              <p>{{$item['Memory']}}</p>
            </div>
            </a>
          </div>
    
          @endforeach
         
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="row">
      <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
      <br><br><br><br>
      <div class="card" style="width: 50rem; height: 50rem;">
  <img src="https://9to5google.com/wp-content/uploads/sites/4/2020/05/smartphones_may_2020_3.jpg?quality=82&strip=all" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><b>Industry leading Smartphones</b></h3>
    <p class="card-text">Phones are all but vital to our modern existence, so choosing a good one is important. As they become thinner, more feature-packed, and inevitably more expensive, you’ll find the final word on the latest smartphones, both budget and flagship, Android and iOS, right here. For The KNOWHERE’s thoughts on everything Google Pixel, Apple iPhone, Samsung Galaxy, and more, you’ve come to the right place.</p>
    <a href="/mobile" class="btn btn-primary">Let's go</a>
  </div>
      </div>
      
      <div class="card" style="width: 50rem; height: 50rem;">
  <img src="https://cdn.thewirecutter.com/wp-content/uploads/2020/04/laptops-lowres-2x1--1024x512.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h3 class="card-title"><b>Military Grade Laptops</b></h3>
    <p class="card-text">Laptops are evolving at a dramatic pace. The best laptop is out there and we will to help you find it. From each new iteration of the Apple MacBook and Microsoft Surface to what’s coming up from likes of Dell, HP, Lenovo, and more, The KNOWHERE has you covered.</p>
    <br><br><a href="/laptop" class="btn btn-primary">Let's go</a>
  </div>
      </div>
      
      </div>
      
</div>
      </div>
      
</div>

@endsection