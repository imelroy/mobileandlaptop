@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
<form action="/loginread" method="post">
{{  csrf_field()  }}
<table class="table table-borderless">
<h3><center><br>Login</h3>
<tr>
    <td>Username</td>
    <td><input name="username" type="text" class="form-control"></td>
</tr>
<tr>
    <td>Password</td>
    <td><input name="password" type="password" class="form-control"></td>
</tr>
<tr>
    <td></td>
    <td><button class="btn btn-success">Login</button></td>
</tr>
</table>
</form>
</div>
<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
</div>
</div>
@endsection