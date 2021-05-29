@extends("admintheme")

@section("contentdata")

<div class="container">
<div class="row">


<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<br><br>
<h2><center>MOBILE LIST</H2>
<br><br>
  <table class="table table-borderless">
  
     <tr>
         <th> ID </th>
         <th> MODEL </th>
         <th> MEMORY </th>
         <th> DISPLAY </th>
         <th> CAMERA </th>
         <th> FEATURES </th>
         <th> PRICE </th>
         <th> GALLERY </th>
     </tr>


@foreach($mobiles as $mobile)
     <tr>
         <td> {{  $mobile->id }} </td>
         <td> {{  $mobile->Model }} </td>
         <td> {{  $mobile->Memory }} </td>
         <td> {{  $mobile->Display }} </td>
         <td> {{  $mobile->Camera }} </td>
         <td> {{  $mobile->Features }} </td>
         <td> {{  $mobile->Price }} </td>
         <td> {{  $mobile->Gallery }} </td>

<td> <a class="btn btn-warning" href="/mobile/{{$mobile->id}}/editmobile">Update product</a> </td>

<td>  <a class="btn btn-danger" href="/mobile/{{$mobile->id}}/delete"  >Remove product</a>  </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>

</div>
</div>
    
@endsection