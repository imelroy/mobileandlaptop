@extends("theme")
@section("content")
<div class="container">
<div class="row">

<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<table class="table">
<tr>
    <th>MODEL</th>
    <th>NETWORK</th>
    <th>LAUNCH</th>
    <th>BODY</th>
    <th>DISPLAY</th>
    <th>PLATFORM</th>
    <th>MEMORY</th>
    <th>BATTERY</th>
    <th>MAIN CAMERA</th>
    <th>SELFIE CAMERA</th>
    <th>FEATURES</th>
    <th>PRICE</th>
</tr>
@foreach($mobiles as $mobile)
<tr>
    <td>{{ $mobile->mmodel }}</td>
    <td>{{ $mobile->mnetwork }}</td>
    <td>{{ $mobile->mlaunch }}</td>
    <td>{{ $mobile->mbody }}</td>
    <td>{{ $mobile->mdisplay }}</td>
    <td>{{ $mobile->mplatform }}</td>
    <td>{{ $mobile->mmemory }}</td>
    <td>{{ $mobile->mbattery }}</td>
    <td>{{ $mobile->mmaincamera }}</td>
    <td>{{ $mobile->mselfiecamera }}</td>
    <td>{{ $mobile->mfeatures }}</td>
    <td>{{ $mobile->mprice }}</td>
</tr>
@endforeach

</table>
</div>

</div>
</div>
@endsection