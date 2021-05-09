@extends('theme')
@section("content")
<div class="custom-mobile">
     <div class="col-sm-4">
         <a href="#">Filter</a>
     </div>
     <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
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
          </div>
     </div>
</div>

@endsection