<?php

namespace App\Http\Controllers;

use DB;
use App\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    // connection to the chamber and join table
    public function list()
    {

      $lists = DB::table('rooms')
        ->join('bed_types', 'rooms.bed_type_id', '=', 'bed_types.id_bed') 
        ->join('views', 'rooms.view_id', '=', 'views.id') 
        ->join('bathroom_types', 'rooms.bathroom_type_id', '=', 'bathroom_types.id') ->get();

    	return view ('/listrooms', compact('lists'));

    }

// connection to the chamber and join table
    public function show($name) { 

         $lists = DB::table('rooms')
            ->join('bed_types', 'rooms.bed_type_id', '=', 'bed_types.id_bed') 
            ->join('views', 'rooms.view_id', '=', 'views.id') 
            ->join('bathroom_types', 'rooms.bathroom_type_id', '=', 'bathroom_types.id') 
            ->where('name', $name)->get(); 

            return view('room', compact('lists')); 

          }
}
