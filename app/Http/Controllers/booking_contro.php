<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus_model1;
use App\Models\booking;
class booking_contro extends Controller
{
    //
     function index()
    {
        return view('report');
    }

    function fetch_bus()
    {
    	$data = bus_model1::all();
    	// echo $data;
    	return view('Report')
    	->with(['data1'=>$data]);
    }


    function check($id)
    {
        // echo $id;
        $data= booking::where('bus_id', $id)->get();
        // echo $data;
        $data1= bus_model1::where('bus_id', $id)->get();
        
        return view('booking_details')->with(['data'=>$data])->with(['data1'=>$data1]);
        // return view('booking_details')->with(['data1'=>$data1]);
    }

}
