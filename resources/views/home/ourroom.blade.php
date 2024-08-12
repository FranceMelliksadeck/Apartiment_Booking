<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Apartiment</h2>
                     <p>Welcome To Our Apartiments We provide The Best Services As You Desire </p>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach($apartiment as $apartiments)

               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img style="height: 200px; width: 350px;" src="apartiment/{{$apartiments->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">      
                        <h3>{{$apartiments->apartiment_tittle}}</h3>
                        <p style="padding: 10px;">{!! Str::limit($apartiments->description,100)!!}</p>
                        <a  class="btn btn-success" href="{{url('apartiment_details',$apartiments->id)}}">Apartiment Details</a>
                     </div>
                 </div>
               </div>
               @endforeach

            </div> 
         </div>
      </div>