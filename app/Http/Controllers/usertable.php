<?php

namespace App\Http\Controllers;
use App\Models\booking;
use App\Models\customer;
use DB;
use Illuminate\Support\Collection;

use Illuminate\Http\Request;

class usertable extends Controller
{
    public function usertable()
    {
        return view('usertable');
    }

    public function search(Request $request)
        {
            // if($request->ajax())
            // {
            // $output="";
            // $search_data=booking::where('dept_name','LIKE','%'.$request->search."%")->orWhere('dept_id','LIKE','%'.$request->search."%")->orWhere('dept_status','LIKE','%'.$request->search."%")->get();
            // if($search_data)
            // {

            // $output.='<tr>'.

            //     '<td contenteditable="true" id="dept_id"></td>'.
            //     '<td contenteditable="true" id="dept_name"></td>'.
            //     '<td ><select id="dept_status" style="height:41px;width:150px;border:0px none;background-color:#F8F8F8"><option value="" disabled="disabled" selected>Select</option><option value="active">active</option><option  value="inactive">inactive</option></select></td>'.
            //     '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>'.

            // '<tr>';
            // foreach ($search_data as $key => $sd) {
            // $output.='<tr>'.
            // '<td class="column_name" data-column_name="dept_id" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_id.'</td>'.
            // '<td class="column_name" data-column_name="dept_name" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_name.'</td>'.
            // '<td class="column_name" data-column_name="dept_status" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_status.'</td>'.
            // '<td><button type="button" class="btn btn-danger btn-xs delete" dept_id="'.$sd->dept_id.'">Delete</button></td>'.
              
            // '</tr>';
            // }

            //  return Response($output);
            //    }

            //     }
        }




    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
             $data = booking::orderBy('book_id', 'asc')->get();
                    echo json_encode($data); 


            // $data =booking::join('customers', 'bookings.id', '=', 'customers.cust_id')
            //    ->get();

               //echo json_encode($data); 

               // $users = User::join('posts', 'users.id', '=', 'posts.user_id')
               // ->get(['users.*', 'posts.descrption']);
        }
    }

//     function add_data(Request $request)
//     {
        

// $data = \Validator::make($request->all(), [
//             'dept_id' => 'numeric',
//             'dept_name' => 'required',
//             'dept_status' =>'required'
//         ]);
     
//         if ($data->passes()) {

//           M_dept::create($request->all());
//            echo '<div class="alert alert-success">Data Inserted</div>';
//         }
//         else{
//       echo '<div class="alert alert-danger">Enter Proper Credentials</div>';
//        }
//   }



    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name => $request->column_value
            );
                booking::where('book_id', $request->book_id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }

    }
        
        

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
                 booking::where('book_id', $request->book_id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

}
