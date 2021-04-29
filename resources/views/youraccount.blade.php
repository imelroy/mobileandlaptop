@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
<form action="/youraccountread" method="post">
{{  csrf_field()  }}
<table class="table table-borderless">
<br>
<h3><center><b><u>ACCOUNT</h3><br>
<tr>
    <td>Userame:</td>
    <td><input name="username" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Name:</td>
    <td><input name="name" type="text" class="form-control"></td>
</tr>
<tr>
    <td>email:</td>
    <td><input name="email" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Mobile:</td>
    <td><input name="mobile" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Address:</td>
    <td><input name="address" type="textarea" class="form-control"></td>
</tr>
<tr>
    <td>Password:</td>
    <td><input name="password" type="text" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-outline-success">EDIT</button></td>
</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"></div>
</div>
</div>
@endsection