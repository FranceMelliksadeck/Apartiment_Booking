<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apartiments;
use App\models\Booking;

class HomeController extends Controller
{
    public function index ()
    {
       return view ('admin.index');
    }
    public function home ()
   {
    $apartiment = apartiments::all();

    return view ('home.index', compact('apartiment'));
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
      {

        return view ('admin.gallary');
      }
}
   