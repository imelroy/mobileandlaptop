@extends('theme')
@section("content")
<div class="custom-laptop">
     <div class="col-sm-4">
         <a href="#">Filter</a>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($laptops as $item)
            <div class="searched-item">
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