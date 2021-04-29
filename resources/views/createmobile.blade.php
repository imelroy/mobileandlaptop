@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/mobileread" method="post">
{{  csrf_field()  }}
<table class="table table-borderless">
<br>
<h3><center><b><u>MOBILE ADD</h3><br>
<tr>
    <td>Model</td>
    <td><input name="mmodel" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Network</td>
    <td><input name="mnetwork" type="text" class="form-control"> </td>
</tr>
<tr>
    <td>Launch</td>
    <td><input name="mlaunch" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Body</td>
    <td><input name="mbody" type="text" class="form-control"></td> 
</tr>
<tr>
    <td>Display</td>
    <td><input name="mdisplay" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Platform</td>
    <td><input name="mplatform" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Memory</td>
    <td><input name="mmemory" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Battery</td>
    <td><input name="mbattery" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Main Camera</td>
    <td><input name="mmaincamera" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Selfie Camera</td>
    <td><input name="mselfiecamera" type="text" class="form-control"></td> 
</tr>
<tr>
    <td>Features</td>
    <td><input name="mfeatures" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Price</td>
    <td><input name="mprice" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-outline-success">ADD</button></td>
</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>
@endsection