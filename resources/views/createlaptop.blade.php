@extends("theme")
@section("content")
<div class="container">
    <div class="row">
    <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
    <form action="/laptopread" method="post">
    {{  csrf_field()  }}
    <table class="table table-borderless">
    <br>
    <h3><center><b><u>LAPTOP ADD</h3><br>
    <tr>
        <td>Model</td>
        <td><input name="lmodel" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Launch</td>
        <td><input name="llaunch" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Brand</td>
        <td><input name="lbrand" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Display</td>
        <td><input name="ldisplay" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Platform</td>
        <td><input name="lplatform" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Memory</td>
        <td><input name="lmemory" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Battery</td>
        <td><input name="lbattery" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Graphics</td>
        <td><input name="lgraphics" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Processor</td>
        <td><input name="lprocessor" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Color</td>
        <td><input name="lcolor" type="text" class="form-control"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input name="lprice" type="text" class="form-control"></td>
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