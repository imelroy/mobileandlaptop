@extends('theme')
@section("content")
<div class="custom-mobile">
     <div class="col-sm-4">
     <h1><b>Search Result</h1>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            
            @foreach($mobiles as $item)
            <div class="searched-item">
              <a href="mobiledetail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['Gallery']}}">
              <div class="">
                <h2>{{$item['Model']}}</h2>
                <h5>{{$item['Memory']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
            @foreach($laptops as $items)
            <div class="searched-item">
              <a href="laptopdropview/{{$item['id']}}">
              <img class="trending-image" src="{{$items['Gallery']}}">
              <div class="">
                <h2>{{$items['Model']}}</h2>
                <h5>{{$items['Memory']}}</h5>
              </div>
            </a>
            </div>
            @endforeach
          </div>
     </div>
</div>

@endsection