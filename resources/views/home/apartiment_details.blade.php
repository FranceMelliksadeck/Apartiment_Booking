<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

   <base href="/public">
   @include('home.css')
   <style type="text/css">
      label {
         display: inline-block; 
         width: 200px;
      }
      input {
         width: 100%; 
      }
   </style>
</head>
<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#"/></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      @include('home.header')
   </header>
   <!-- end header inner -->
   <div class="our_room">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Apartiment Details</h2>
                  <p>Welcome To Our Apartiments We provide The Best Services As You Desire</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8">
               <div id="serv_hover" class="room">
                  <div class="room_img" style="padding: 20px">
                     <figure><img style="height: 300px; width: 800px;" src="/apartiment/{{$apartiment->image}}" alt="#"/></figure>
                  </div>
                  <div class="bed_room">
                     <h2 style="padding: 12px;">{{$apartiment->apartiment_tittle}}</h2>
                     <p style="padding: 12px;">{{$apartiment->description}}</p>
                     <h4 style="padding: 12px;">Free WFi: {{$apartiment->wifi}}</h4>
                     <h4 style="padding: 12px;">Apartiment Type: {{$apartiment->apartiment_type}}</h4>
                     <h3 style="padding: 12px;">Price: Tsh{{$apartiment->price}}/=</h3>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <h1 style="font-size: 40px !important;">Book Apartiment</h1>

                <div>
                @if(session()->has('message'))

                <div class="alert alert-success">
                <button type="button" class="close" data-bs-dismiss="alert">x</button>
                {{session()->get('message')}}
                </div>

                @endif

                </div>

               @if($errors)
               @foreach($errors->all() as $error)
               <li style="color: red;">{{$error}}</li>
               @endforeach
               @endif

               <form action="{{url('add_booking', $apartiment->id)}}" method="post">
                  @csrf
                  <div>
                     <label>Name:</label>
                     <input type="text" name="name" 
                     @if(Auth::id())
                     value="{{Auth::user()->name}}"
                     @endif
                     >  
                  </div>
                  <div>
                     <label>Email:</label>
                     <input type="email" name="email"
                     @if(Auth::id())
                     value="{{Auth::user()->email}}"
                     @endif
                     >  
                  </div>
                  <div>
                     <label>Phone:</label>
                     <input type="number" name="phone"
                     @if(Auth::id())
                     value="{{Auth::user()->phone}}"
                     @endif
                     >  
                  </div>
                  <div>
                     <label>Start Date:</label>
                     <input type="date" name="startDate" id="startDate">  
                  </div>
                  <div>
                     <label>End Date:</label>
                     <input type="date" name="endDate" id="endDate">  
                  </div>
                  <div style="padding-top: 20px;">
                     <input type="submit" class="btn btn-success" value="Book Now">  
                  </div>
               </form>
            </div>
         </div> 
      </div>
   </div>
   <!-- footer -->
   @include('home.footer')
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script type="text/javascript">
      $(function() {
         var dtToday = new Date();
         var month = dtToday.getMonth() + 1;
         var day = dtToday.getDate();
         var year = dtToday.getFullYear();

         if (month < 10) month = '0' + month.toString();
         if (day < 10) day = '0' + day.toString();

         var maxDate = year + '-' + month + '-' + day;
         $('#startDate').attr('min', maxDate);
         $('#endDate').attr('min', maxDate);
      });
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
   integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
  