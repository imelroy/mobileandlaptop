@extends("admintheme")

@section("contentdata")

<div class="container">
<div class="row">


<div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
<br><br>
<h2><center>LAPTOP LIST</H2>
<br><br>
  <table class="table table-borderless">
  
     <tr>
         <th> MODEL </th>
         <th> MEMORY </th>
         <th> DISPLAY </th>
         <th> PLATFORM </th>
         <th> PROCESSOR </th>
         <th> GRAPHICS </th>
         <th> PRICE </th>
         <th> GALLERY </th>
     </tr>


@foreach($laptops as $laptop)
     <tr>
         <td> {{  $laptop->Model }} </td>
         <td> {{  $laptop->Memory }} </td>
         <td> {{  $laptop->Display }} </td>
         <td> {{  $laptop->Platform }} </td>
         <td> {{  $laptop->Processor }} </td>
         <td> {{  $laptop->Graphics }} </td>
         <td> {{  $laptop->Price }} </td>
         <td> {{  $laptop->Gallery }} </td>

<td> <a class="btn btn-warning" href="/laptop/{{$laptop->id}}/editlaptop">  Edit  </a> </td>

<td>  <a class="btn btn-danger" href="/laptop/{{$laptop->id}}/delete"  > Delete  </a>  </td>

     </tr>

  @endforeach   


   
  
  </table>

</div>

</div>
</div>
    
@endsection