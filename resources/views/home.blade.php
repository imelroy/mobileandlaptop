@extends("theme")
@section("content")
<div class="custom-mobiles">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
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
      <div class="trending-wrapper">
        <h3><b>Trending Products</h3>
        <br>
        @foreach($mobiles as $item)
        <div class="trending-item">
          <a href="mobiledetail/{{$item['id']}}">
          <img class="trending-image" src="{{$item['Gallery']}}">
          <div class="">
            <h3>{{$item['Model']}}</h3>
          </div>
        </a>
        </div>
        @endforeach
      </div>
      </div>
</div>
@endsection