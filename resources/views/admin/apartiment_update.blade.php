<!DOCTYPE html>
<html>
  <head> 

    <base href="/public">

   @include ('admin.css')
   <style type="text/css">
    label
    {
        display:inline-block;
        width: 200px;
    }
    .div_deg
    {
         padding-top: 30px;
    }
    .div_center
    {
        text-align: center;
        padding: 40px;
    }
    </style>
  </head>
  <body>
  @include ('admin/header')
 
      <!-- Sidebar Navigation-->
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <div class="div_center">
                <h1 style="font-size: 30px; font-weight: bold;">UPDATE APARTIMENT<h1>
                
                 <form action="{{url('edit_apartiment',$data->id)}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">
                        <label>Apartiment Tittle</label>
                        <input type="text" name="tittle" value="{{$data->apartiment_tittle}}">
                    </div>   
                    <div class="div_deg">
                        <label>Description</label>
                        <textarea name="description"> {{$data->description}}</textarea> 
                        
                    </div> 
                    <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$data->price}}">
                    </div> 
                    <div class="div_deg">
                        <label>Location</label>
                        <input type="text" name="location" value="{{$data->apartiment_location}}">
                    
                    </div>
                    <div class="div_deg">
                        <label>Apartiment Type</label>
                        <select name="type">
                            <option selected value="{{$data->apartiment_type}}">{{$data->apartiment_type}}</option>
                            <option  value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                        </div>
                       
                    <div class="div_deg">
                        <label>Free Wifi</label>
                        <select name="wifi">
                        <option selected value="{{$data->wifi}}">{{$data->wifi}}</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                            
                        </select>
                    </div class="div_deg"> 

                    <div class="div_deg" >
                        <label>Current Image</label>
                        <img  style="margin: auto;" width="100" src="/apartiment/{{ $data->image }}">
                    </div> 
                    
                    <div class="div_deg">
                        <label>Upload  Image</label>
                        <input type="file" name="image"> 
                    </div> 
                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Update apartiment">
                    </div> 
                 <form>
             </div>

          <div>
            <div>
                <div>
      

        @include('admin/footer')
        
  </body>
</html>