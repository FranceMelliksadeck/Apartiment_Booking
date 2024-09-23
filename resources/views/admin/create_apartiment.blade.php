<!DOCTYPE html>
<html>
  <head> 
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
                <h1 style="font-size: 30px; font-weight: bold;">ADD APARTIMENT<h1>
                
                 <form action="{{('add_apartiment')}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">
                        <label>Apartiment Tittle</label>
                        <input type="text" name="tittle">
                    </div>   
                    <div class="div_deg">
                        <label>Description</label>
                        <textarea name="description"></textarea>
                    </div> 
                    <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price">
                    </div> 
                    <div class="div_deg">
                        <label>Location</label>
                        <input type="text" name="location" >
                    
                    </div>
                    <div class="div_deg">
                        <label>Apartiment Type</label>
                        <select name="type">
                            <option selected value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>
                    </div> 
                    
                    <div class="div_deg">
                        <label>Free Wifi</label>
                        <select name="wifi">
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                            
                        </select>
                    </div> 
                    <div class="div_deg">
                        <label>Upload image</label>
                        <input type="file" name="image">
                    </div> 
                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Add apartiment">
                    </div> 
                 <form>
             </div>

          <div>
            <div>
                <div>
      

        @include('admin/footer')
        
  </body>
</html>