@extends("admintheme")
@section("contentdata")

<div class="container">
<div class="row">


<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<br><br>
<h2><center>USER LIST</H2>
<br><br>
  <table class="table table-borderless">
  
    <tr>
    <th>User Id</th>
    <th>Username</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Account Created on</th>
     </tr>


@foreach($users as $admin)
     <tr>
        <td> {{  $admin->id }} </td>
        <td> {{  $admin->username }} </td>
        <td> {{  $admin->name }} </td>
        <td> {{  $admin->email }} </td>
        <td> {{  $admin->mobile }} </td>
        <td> {{  $admin->address }} </td>
        <td> {{  $admin->created_at }} </td>
        <td>  <a class="btn btn-danger" href="/admin/{{$admin->id}}"  >Remove User</a>  </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>

</div>
</div>
    
@endsection