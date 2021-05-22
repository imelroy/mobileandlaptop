<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <div class="register">
    <div class="row" style ="margin-top:130px">
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    <br> <br> <br>
    
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
    <h2><center>Update Account details</h2>
    
    <form action="/usereditprocess/{{$users->id }}" method="post">
    {{csrf_field() }}

    @if(Session::get('Success'))
    <div class="alert alert-success">
    {{ Session::get('Success')}}
    </div>
    @endif
    @if(Session::get('Fail'))
    <div class="alert alert-danger">
    {{ Session::get('Fail')}}
    </div>
    @endif
    @csrf
    <div class="form-group">
    <label>Username</label>
    <input value="{{$users->username }}" type="text" class="form-control" name="username" placeholder=" Enter the username" >
    <span class="text-danger">@error('username') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Name</label>
    <input value="{{$users->name }}" type="text" class="form-control" name="name" placeholder=" Enter your name" >
    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Email</label>
    <input value="{{$users->email }}" type="text" class="form-control" name="email" placeholder=" Enter your email" >
    <span class="text-danger">@error('email') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Mobile</label>
    <input value="{{$users->mobile }}" type="text" class="form-control" name="mobile" placeholder=" Enter your mobile no" >
    <span class="text-danger">@error('mobile') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Address</label>
    <input value="{{$users->address }}" type="text" class="form-control" name="address" placeholder=" Enter your address" >
    <span class="text-danger">@error('address') {{ $message }} @enderror</span>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input value="{{$users->password }}" type="password" class="form-control" name="password" placeholder=" Enter the password">
    <span class="text-danger">@error('password') {{ $message }} @enderror</span>
    </div>
    <br>
    <tr>
        <td>
        <center>
        <button type="submit" class="btn btn-block btn-primary register-page" >Update</button>
    </td>
    </tr>
    <br><center>
    <br>
    <a href="/admin/youraccount">Go Back</a>
    <br>

   
    </form>
    </div></div>
    </div>
    <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<style>
.register-page{
    width: 491px
}
</style>
</body> 
</html>