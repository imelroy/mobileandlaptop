@extends('theme')
@section("content")
<div class="custom-mobile">
<h1><b><center>Search Result</h1>
<br><br>

     <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
     
     
     </div>
     <div class="col col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
        <div class="trending-wrapper">
            
            @foreach($mobiles as $item)
            <div class="searched-item">
            <center>
              <a href="mobiledropview/{{$item['id']}}">
              <img class="trending-image" src="{{$item['Gallery']}}">
              <div class="">
                <h2>{{$item['Model']}}</h2>
                <h5>{{$item['Memory']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
            @foreach($laptops as $item)
            <div class="searched-item">
            <center>
              <a href="laptopdropview/{{$item['id']}}">
              <img class="trending-image" src="{{$item['Gallery']}}">
              <div class="">
                <h2>{{$item['Model']}}</h2>
                <h5>{{$item['Memory']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>

@endsection