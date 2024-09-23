<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartiments;
use App\Models\Booking;
use App\Models\Gallary;
use App\Models\Contact;
use Notification;
use App\Notifications\MyFirstNotification;


class HomeController extends Controller
{
    public function index ()
    {
       return view ('admin.index');
    }
    public function home ()
   {
    $apartiment = apartiments::all();

    $gallary = gallary::all();

    return view ('home.index', compact('apartiment','gallary'));
   }


    public function create_apartiment()
   {
    return view ('admin.create_apartiment');
   }

   public function add_apartiment(Request $request )
   {
        $data =  new Apartiments;

        $data->apartiment_tittle = $request-> tittle;
        $data->description= $request-> description;
        $data->price = $request-> price;
        $data->location = $request->location;
        $data->wifi = $request-> wifi;
        $data->apartiment_type = $request-> type;
        $image = $request-> image;
        if ($image)
        {

         $imagename= time().'.'.$image->getClientOriginalExtension();
         $request->image->move('apartiment',$imagename); 

         $data->image=$imagename;

        }

        $data->save();

        return redirect ()->back();
        

   }

   public function  view_apartiment()
   {
      $data = apartiments::all();

      return view('admin.view_apartiment',compact('data'));
   }
 public function apartiment_delete($id)
 {
   $data = apartiments::find($id);
    
   $data->delete();


     return redirect ()->back(); 
 }

 public function apartiment_update($id)
 {
   $data = apartiments::find($id);
    
   
   
   return view('admin.apartiment_update',compact('data'));

 }
 public function edit_apartiment (Request $request , $id)
 {
   $data = apartiments::find($id);

   $data->apartiment_tittle = $request->tittle;

   $data->description = $request->description; 

   $data->price= $request->price;

   $data->location = $request->location;

   $data->wifi= $request->wifi;  
 
    
   $data->apartiment_type= $request->type; 

   $image = $request -> image;

   if($image)
   {
    $imagename = time().'.'.$image->getClientOriginalExtension();   

    $request->image->move('apartiment',$imagename);

    $data->image=$imagename;

   }

   $data-> save();

   return redirect ()->back();
 }

  public function bookings()
  {
    $data = Booking::all();
    return view('admin.booking',compact('data'));
  }
  public function delete_booking ($id)
  {
    $data = Booking:: find($id);

    $data->delete();
    
     return redirect()->back();
  }

  public function approve_book($id)
    {
        $booking = Booking::find($id);

        if ($booking) {
            $booking->status = 'approved'; // Set status to 'approved'
            $booking->save();

            return redirect()->back()->with('success', 'Booking approved successfully.');
        } else {
            return redirect()->back()->with('error', 'Booking not found.');
        }
    }

    // Method to reject a booking
    public function reject_book($id)
    {
        $booking = Booking::find($id);

        if ($booking) {
            $booking->status = 'rejected'; // Set status to 'rejected'
            $booking->save();

            return redirect()->back()->with('success', 'Booking rejected successfully.');
        } else {
            return redirect()->back()->with('error', 'Booking not found.');
        }
      }

      public function view_gallary()
      {   $gallary = Gallary::all();

        return view ('admin.gallary',compact('gallary'));
      }
      public function upload_gallary(Request $request )
      {
        $data= new Gallary;

        $image = $request->image;

        if ($request->hasFile('image')) {
          $image = $request->file('image');
          $imagename = time() . '.' . $image->getClientOriginalExtension();
          $image->move('gallary', $imagename);
          $data->image = $imagename;
          $data->save();
      
          return redirect()->back();
      } else {
          return redirect()->back()->with('error', 'No image uploaded');
      }
        }
        public function delete_gallary($id)
        {
          $data = gallary::find($id);

          $data->delete();
          
          return redirect()->back();
        }
        public function  contact (Request $request)

        
   {
     $data = new contact;

     $data->name = $request-> name;
     $data->email = $request-> email;
     $data->phone= $request-> phone;
     $data->message = $request-> message;

     $data->save();

   return redirect ()->back()->with('message', 'Message sent Successfully');;
   }

   public function messages ()
   {
    $data = contact::all();

   return view('admin.messages',compact('data'));
   }

   public function send_mail($id)
   {

       $data = contact::find($id);

       return view('admin.send_mail',compact('data'));
   }
   public function mail(Request $request,$id)
   {
      $data = contact::find($id);

      $details = [
        'greeting' => $request->greeting,
        'body' => $request->body,
        'action_text' => $request->action_text,
        'action_url' => $request->action_url,
        'endline' => $request->endline,
    ];
    
    Notification::send($data, new MyFirstNotification($details));
    
    return redirect()->back();

   }
   public function our_apartiment()
   {
    $apartiment = apartiments::all();

    return view('home.our_apartiment',compact('apartiment'));
   }
   public function gallary2()
   {
    $gallary = gallary::all();

    return view('home.gallary_page',compact('gallary'));
    
   }
   public function about()
   {
    return view('home.about_page');
   }
   public function contact_us()
   {
       return view('home.contact_page');
   }
  
  }

        
      


   