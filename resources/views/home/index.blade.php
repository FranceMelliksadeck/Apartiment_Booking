<!DOCTYPE html>
<html lang="en">
   <head>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
 integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

      @include ('home.css')

      <style>
  


         </style>
   </head>
   <!-- body -->
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
      <!-- end header -->
      <!-- banner -->
      @include('home.slider')
      <!-- end banner -->
      <!-- about -->
     @include('home.about')
      <!-- end about -->
      <!-- our_room -->
      @include('home.ourroom')
      <!-- end our_room -->
      <!-- gallery -->
      @include('home.gallary')
      <!-- end gallery -->
      <!-- blog -->
      @include('home.blog')
      <!-- end blog -->
      <!--  contact -->
      @include ('home.contact')
      <!-- end contact -->
      <!--  footer -->
     @include('home.footer')
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

      <script type="text/javascript">
    $(window).scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop(); // Corrected scrolltop() to scrollTop()
    });

    $(document).ready(function(){
        if (sessionStorage.scrollTop !== undefined) { // Corrected scrolltop to scrollTop and checked for undefined
            $(window).scrollTop(sessionStorage.scrollTop); // Corrected scrolltop() to scrollTop()
        }
    });
</script>

   </body>

</html>