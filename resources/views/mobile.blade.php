@extends("theme")
@section("content")
<div class="container">
<title>Mobile</title>
<div class="trending-wrapper">
        <h1><b>Smart Phones</h1>
        <br>
        @foreach($mobiles as $item)
        <div class="trending-item">
        <div class="">
            <h3>{{$item['Model']}}</h3>
          </div>
          <a href="mobiledropview/{{$item['id']}}">
          <img class="trending-image" src="{{$item['Gallery']}}">
          
        </a>
        </div>
        @endforeach
      </div>
     
      </div>
      @endsection