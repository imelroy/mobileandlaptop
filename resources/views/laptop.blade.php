@extends("theme")
@section("content")
<div class="container">
<title>Laptop</title>
<div class="trending-wrapper">
        <h1><b>Laptops</h1>
        <br><br>
        @foreach($laptops as $item)
        <div class="trending-item">
        <div class="">
            <h3>{{$item['Model']}}</h3>
          </div>
          <a href="laptopdropview/{{$item['id']}}">
          <img class="trending-image" src="{{$item['Gallery']}}">
          
        </a>
        </div>
        @endforeach
      </div>
     
      </div>
      @endsection