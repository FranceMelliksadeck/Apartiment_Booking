<!DOCTYPE html>
<html>
  <head> 
   @include ('admin.css')
   <style type="text/css">
   .table_deg {
    border: 2px solid white;
    margin: auto;
    width: 80%;
    text-align: center;
    
}

.th_deg {
    background-color: powderblue;
    padding: 8px;
}

tr {
    border: 3px solid white;
}

td {
    padding: 10px; 
}

td.name, td.phone, td.email {
    padding-right: 30px;  
}
</style>
  </head>
  <body>
  @include ('admin/header')
 
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <table class="table_deg">
          <center><h1 style="font-size: 60px; font-weight:bold;">CUSTOMER MESSAGES<h1></center>
            <tr>
                <th class="th_deg">Name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Mesage</th>
                <th class="th_deg">Send Email</th>
            </tr>
            @foreach($data as $data )
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->email}}</td>
                <td>{!! Str::limit($data->message,100)!!}</td> 
                <td>
                    <a class="btn btn-success" href="{{url('send_mail',$data->id)}}">Send Email</a>
                </td> 
            </tr>
            @endforeach
         </table>

          </div>
               </div>
                  </div>
     
        @include('admin/footer')
        
  </body>
</html>