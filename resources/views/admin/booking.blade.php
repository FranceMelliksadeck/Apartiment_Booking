<!DOCTYPE html>
<html>
  <head> 

  <style type="text/css">
   .table_deg {
    border: 2px solid white;
    margin: auto;
    width: 80%;
    text-align: center;
    
}

.th_deg {
    background-color: blue;
    padding: 8px;
}

tr {
    border: 3px solid white;
}

td {
    padding: 10px; 
}

td.phone, td.arrival-date, td.email {
    padding-right: 30px;  
}
</style>

   @include ('admin.css')
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
          <center><h1 style="font-size: 60px; font-weight:bold;">ALL BOOKINGS<h1></center>
            <tr>
                <th class="th_deg"> apartiment_id </th>
                <th class="th_deg">Customer name</th>
                <th class="th_deg">Email</th>
                <th class="th_deg">Phone</th>
                <th class="th_deg">Arrial Date</hth>
                <th class="th_deg">Leaving Date</th>
                <th class="th_deg">Status</th>
                <th class="th_deg">Apartiment Tittle</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Status Update</th>
            </tr>
           
            @foreach($data as  $data  )
            <tr>
                <td>{{$data->apartiment_id}}</td>
                <td>{{$data-> name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->start_date}} </td> 
                <td>{{$data->end_date}}</td> 
                <td>
                  @if($data->status == 'approved')
                      <span style="color: green;">Approved</span>
                  @elseif($data->status == 'rejected')
                      <span style="color: red;">Rejected</span>
                  @elseif($data->status == 'waiting')
                      <span style="color: orange;">Waiting</span>
                  @endif
              </td>
  

                @if($data->apartiments)

                <td>{{$data->apartiments->apartiment_tittle}}</td>
                <td>${{$data->apartiments->price}}</td> 
                <td>
                    <img style="height: 80px; width: 500px" src="/apartiment/{{$data->apartiments->image}}">
                </td> 
                @else
               <td colspan="3">N/A</td>
                @endif
                <td>
                    <a  onclick="return confirm('Are You Sure You Want To Delete This?'); "
                    class="btn btn-danger" href="{{url('delete_booking',$data->id )}}">Delete</a>
                </td> 
                 <td>
                  <span style="padding-bottom: 10px;" >
                  <a style="padding-botton: 20px;" class="btn btn-success" href="{{url('approve_book',$data->id)}}">Approve</a>
                    </span>
                  <a class="btn btn-warning" href="{{url('reject_book',$data->id)}}">Rejected</a>
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