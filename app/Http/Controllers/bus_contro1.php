<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bus_model1;
class bus_contro1 extends Controller
{
    //

     function index()
    {
        return view('crud_bus');
    }



    //search function
    // public function search(Request $request)
    //     {
    //         if($request->ajax())
    //         {
    //         $output="";


    //         $search_data=bus_model1::where('dept_name','LIKE','%'.$request->search."%")->orWhere('dept_id','LIKE','%'.$request->search."%")->orWhere('dept_status','LIKE','%'.$request->search."%")->get();
    //         if($search_data)
    //         {

    //         $output.='<tr>'.

    //             '<td contenteditable="true" id="dept_id"></td>'.
    //             '<td contenteditable="true" id="dept_name"></td>'.
    //             '<td ><select id="dept_status" style="height:41px;width:150px;border:0px none;background-color:#F8F8F8"><option value="" disabled="disabled" selected>Select</option><option value="active">active</option><option  value="inactive">inactive</option></select></td>'.
    //             '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>'.

    //         '<tr>';
    //         foreach ($search_data as $key => $sd) {
    //         $output.='<tr>'.
    //         '<td class="column_name" data-column_name="dept_id" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_id.'</td>'.
    //         '<td class="column_name" data-column_name="dept_name" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_name.'</td>'.
    //         '<td class="column_name" data-column_name="dept_status" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_status.'</td>'.
    //         '<td><button type="button" class="btn btn-danger btn-xs delete" dept_id="'.$sd->dept_id.'">Delete</button></td>'.
              
    //         '</tr>';
    //         }

    //          return Response($output);
    //            }

    //             }
    //     }




    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
             $data = bus_model1::orderBy('bus_id', 'asc')->get();
                    echo json_encode($data); 
             // print_r($data);
        }
    }

    function add_data(Request $request)
    {
       
       // print_r($request->all()); 

$data = \Validator::make($request->all(), [
            'bus_id' => 'required',
            'bus_model' => 'required',
            'seats' =>'required',
            'departure_time' =>'required',
            'Arrival_Time' =>'required',
            'entry_point' =>'required',
            'destination' =>'required',
            'price' =>'required'
        ]);
     
        if ($data->passes()) {	
           bus_model1::create($request->all());
           echo '<div class="alert alert-success">Data Inserted</div>';
           
        }
        else{
      echo '<div class="alert alert-danger">Enter Proper Credentials</div>';
       }
}


function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name => $request->column_value
            );
                bus_model1::where('bus_id', $request->bus_id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }

    }
        
        

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
                 bus_model1::where('bus_id', $request->bus_id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }



}
