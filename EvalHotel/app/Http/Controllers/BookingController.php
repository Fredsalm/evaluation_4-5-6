<?php

namespace App\Http\Controllers;

use DB;
use App\Rooms;
use App\Customers;
use App\Bookingstatuses;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function statut($name) 
    { 
        $bookings = DB::table('rooms') 
        ->where('name', $name)
        ->get(); 

        $customers = DB::table('customers') 
        ->get(); 

        $bookingstatuses = DB::table('booking_statuses') 
        ->get(); 

        return view ('/booking', compact('bookingstatuses', 'customers', 'bookings')); 
    }
    
    // public function listcustomers()
    // {

    //   $customers = DB::table('customers')->get();

    //  return view ('/booking', compact('customers'));

    // }

    // public function booking() 
    // { 

    //  $bookings = DB::table('rooms') 
    //  ->get(); 

    //  return view ('/booking', compact('bookings')); 
    // } 
    // public function show($name) 
    // { 
    //  $bookings = DB::table('rooms') 
    //  ->where('name', $name)->get(); 
    //  return view('/booking', compact('bookings')); 
    // }

}
