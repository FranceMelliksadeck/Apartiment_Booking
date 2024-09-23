<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Apartiments;
use App\Models\Booking;


class RoomsController extends Controller
{
    public function apartiment_details($id)
    {
      $apartiment = Apartiments::find($id);

      return view ('home.apartiment_details',compact('apartiment'));
    }
   public function add_booking(Request $request , $id)
   {  
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);

     $data = new Booking;

     $data->apartiment_id = $request-> id;

     $data->name = $request->name;

     $data->email = $request->email;

     $data->phone = $request->phone;



     $startDate = $request->startDate;

     $endDate = $request->endDate;

     $isBooked = Booking::where('apartiment_id',$id)
     ->where('start_date','<=',$endDate)
     ->where('end_date','>=',$startDate)->exists();
     
    if($isBooked)
    {
        return redirect()->back()->with('message', 'Apartiment is Already Booked Please Try Different Date!');
    }
      else
      {
        $data->start_date = $request->startDate;

        $data->end_date = $request->endDate;
        
        $data->save();
   
        return redirect()->back()->with('message', 'Apartiment Booked Successfully');
      }
   

   }
   public function apartiment_location($id)
   {
    $apartiment = Apartiments::find($id);
    
    return view ('home.apartiment_location',compact('apartiment'));
   }
  }