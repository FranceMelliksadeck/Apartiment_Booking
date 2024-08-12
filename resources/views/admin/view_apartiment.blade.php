<!DOCTYPE html>
<html>
  <head> 
   @include ('admin.css')
   <style type="text/css">
    .table_deg
    {
        border: 2px solid white;
        margin: auto;
        width: 80%
        text-align: center; 
        margin-top: 40%:;
      
    }

    .th_deg
    { 
      background-color: blue;
      padding: 10px;
    }
    tr
    {
      border: 3px solid white;
    }
    td
    {
        paddig: 10px;
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

            <tr>
                <th class="th_deg"> apartiment tittle</th>
                <th class="th_deg">description</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Wifi</th>
                <th class="th_deg">apartiment type</hth>
                <th class="th_deg">Image</th>
                <th class="th_deg">Delete</th>
                <th class="th_deg">Update</th>
            </tr>
            @foreach($data as $data )
            <tr>
                <td>{{$data->apartiment_tittle}}</td>
                <td>{!! Str::limit($data->description,100)!!}</td>
                <td>${{$data->price}}</td>
                <td>{{$data->wifi}}</td>
                <td>{{$data->apartiment_type}}</td>
                <td>
                    
                <img  width="100" src="apartiment/{{$data->image}} " >
                </td>
                <td>
                  <a onclick="return confirm('Are You Sure To Delete This?');" class= "btn btn-danger" href="{{url('apartiment_delete',$data->id)}}">Detete</a>
                </td>
                <td>
                  <a  class= "btn btn-warning" href="{{url('apartiment_update',$data->id)}}" >Update</a>
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