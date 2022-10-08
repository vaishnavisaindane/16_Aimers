<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use App\Models\customer;
use App\Models\bus;
use DB;
use Session;
use Illuminate\Support\Collection;


class usermodule extends Controller
{
   public function login()
    {
        return view('login');
    }
//////////////////from page///////////////////////////////////////////////////////////////////////
     public function from()
     {
       // $exam_info=bus::all()->where('status','=','active');

        $data=bus::select('entry_point','destination','bus_id')->get();
               return view('from')->with(['data'=>$data]);

// echo $d2;
         
     }

///////////////////////////////////////////////////////////////////////////////////////////////
    public function fromenter(Request $request)
     {

    $resp=bus::where('entry_point',$request->entry_point)->where('destination',$request->destination)->get();
    

         
            $value = $request->entry_point;
             $value1 = $request->destination;

            


$d1=bus::where('entry_point',$value)->where('destination',$value1)->get();

if ($d1)
        {
            return view('booknow')->with(['d1'=>$d1]);
        }
        else 
        {
            return view('jio');   
        }
         

      return view(booknow);

     }
////////////////////////////////////booknow///////////////////////////////////////////////
    //  public function booknow()
    // {
    //   $d1=bus::select('bus_id','bus_model','seats','departure_time','Arrival_time','entry_point','destination','price')
    //   // ->where("destination","=",Session('destination'))->where("entry_point","=",Session('entry_point'))
    //   ->get();   
 
    //     return view('booknow',['d1'=>$d1]);
    // }

 ////////////////////////////////booking page////////////////////////////////////////////////////////////////

     public function booking(bus $bus_id, Request $request)
     { 
       $bus__id=$bus_id->bus_id;
       
       $data1=bus::where('bus_id','=',$bus__id)
         ->get();
      Session::put('bus_id',$bus__id);
        
        // $data=bus::where('bus_id',session('bus_id'))->get()->first();


      //where('bus_id','=',$bus__id)->get()first();
        // $data1= customer::all();
         
       // return view('booking',['data1'=>$data1])->with('bus__id', $bus__id);
      return view('booking')->with('bus__id', $bus__id);
}

public function book($bus_id){
    $data1=bus::where('bus_id',$bus_id)
         ->get();
        Session::put('bus_model',$data1[0]['bus_model']);
    Session::put('price',$data1[0]['price']);
    //      Session::put($data1->bus_model);
    // Session::put($data1->price);
    
    
    
        return view('booking');
}

public function controllbooking(request $req){
        $f=booking::where('seat', $req->seat)->get();

        if($f)
        {
          return view('booking')->with('msg', 'seat booked  successfully!!');

          //->with('msgw', 'Selected Seat is already booked !!Please choose another!!');
        }
        else
        {
         $add= new  booking;
       
         $add->bus_id = $req->bus_id;
         $add->cust_id = $req->cust_id ;
         $add->seat= $req->seat ;
         $add->passenger= $req->passenger;
         $add->mobile= $req->mobile;
         $add->age= $req->age;
         $add->gender= $req->gender;
         $add->amount= $req->amount;
         $add->save();

         return view('booking')->with('msg', 'seat booked  successfully!!');
        }




}

}