<!DOCTYPE html>
<html>
 <head>
  <title>departments</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
 </head>

<style type="text/css">
  .heading{
      background: linear-gradient(to bottom, #6699ff 0%, #99ccff 100%);
      padding-top: 18px;
      padding-bottom: 10px;
      width: 100%;
      padding-left: 50px;
      margin-top: 0;
      color: #707070;
      
      margin-bottom: 0;
    }



    @media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

.container1{
  border-color:#DCDCDC;border-style:solid;border-width:0px;
}

  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr { 
  
    display: block; 
  }
  
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr { 
    position: absolute;
    top: -9999px;
    left: -9999px;

  }
  
  tr { border: 1px solid #ccc; }
  
  td { 
    /* Behave  like a "row" */
    border: none;
    border-bottom: 1px solid #eee; 
    position: relative;
    padding-left: 50%; 
  }
  
  td:before { 
    /* Now like a table header */
   /* position: absolute;*/
    /* Top/left values mimic padding */
    top: 6px;
    left: 6px;
    width: 45%; 
    padding-right: 10px; 
    white-space: nowrap;
  }
  
  /*
  Label the data
  */
  td:nth-of-type(1):before { content: "ID:"; }
  td:nth-of-type(2):before { content: "Name:"; }
  td:nth-of-type(3):before { content: "Status:"; }
  td:nth-of-type(4):before { content: "Action:"; }
  
}
</style>

 <body> 
  <x-header/>
  <x-header2/>
  <div class="">
   <h3 class="heading"><center> <b>Assign Buses to Different Rooutes</b></center></h3><br>

   <!-- update button -->
<button href="#"  class="btn btn-primary" role="button" id="btninfo" style="float: right; "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><div id="myDIV" style="font-size:20px; display: inline-block;" >Update (Double Click)</div></button><br>
<!-- <button style="margin-left: 90%;" class="btn btn-primary">
        <a href="fetch_bus" style="color: black;">See All Booking
        </a>
      </button> -->
   <div class="panel panel-default">
    <div class="panel-heading">
      <!-- Search btn -->
<div style="float: right;"><input style="padding: 5px 30px;" type="text" placeholder="Search" class="form-controller" id="search" name="search"></input></div>
          <div id="result"></div><br><br>



    </div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">




    <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Route Num</th>
         <th>Bus Model</th>
         <th>Seats</th>
         <th>Departure Time</th>
         <th>Arrival Time</th>
         <th>Start Point</th>
         <th>Destinatin</th>
         <th>price</th>
        </tr>
       </thead>
       <tbody></tbody>
      
      </table>
      {{ csrf_field() }}
     </div>
    </div>
   </div>
</div>
 </body>
</html>

<script>
 // update button fuction 
$('document').ready(function(){
  var x = document.getElementById("myDIV");
  $('.glyphicon-pencil').closest('button').click(function () {
    if ($('td').attr('contenteditable') === 'false') {
        $('td').attr('contenteditable', true);
         x.innerHTML = "You can update table values now!";
    } else {
        $('td').attr('contenteditable', false);
        x.innerHTML = "click to update table.";
    }
  });
});

  //ajax crud of Department table
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"/bus_contro1/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td><input style="height:41px;width:100px;border:0px none;background-color:#F8F8F8" type="number" contenteditable="true" id="bus_id"></td>';
    html += '<td><input style="height:41px;width:150px;border:0px none;background-color:#F8F8F8"  contenteditable="true" id="bus_model"></td>';
    html += '<td><input style="height:41px;width:150px;border:0px none;background-color:#F8F8F8" type="number" contenteditable="true" id="seats"></td>';
    html += '<td><input style="height:41px;width:80px;border:0px none;background-color:#F8F8F8" type="time" contenteditable="true" id="departure_time"></td>';
    html += '<td><input style="height:41px;width:80px;border:0px none;background-color:#F8F8F8" type="time" contenteditable="true" id="Arrival_Time"></td>';
    html += '<td><input style="height:41px;width:150px;border:0px none;background-color:#F8F8F8" contenteditable="true" id="entry_point"></td>';
    html += '<td><input style="height:41px;width:150px;border:0px none;background-color:#F8F8F8" contenteditable="true" id="destination"></td>';
    html += '<td><input style="height:41px;width:150px;border:0px none;background-color:#F8F8F8" contenteditable="true" id="price"></td>';
    html += '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>';
    
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';

     html +='<td contenteditable="false" class="column_name" data-column_name="bus_id" data-bus_id="'+data[count].bus_id+'">'+data[count].bus_id+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="bus_model" data-bus_id="'+data[count].bus_id+'">'+data[count].bus_model+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="seats" data-bus_id="'+data[count].bus_id+'">'+data[count].seats+'</td>';

      html += '<td contenteditable="false" class="column_name" data-column_name="departure_time" data-bus_id="'+data[count].bus_id+'">'+data[count].departure_time+'</td>';

       html += '<td contenteditable="false" class="column_name" data-column_name="Arrival_Time" data-bus_id="'+data[count].bus_id+'">'+data[count].Arrival_Time+'</td>';

        html += '<td contenteditable="false" class="column_name" data-column_name="entry_point" data-bus_id="'+data[count].bus_id+'">'+data[count].entry_point+'</td>';

         html += '<td contenteditable="false" class="column_name" data-column_name="destination" data-bus_id="'+data[count].bus_id+'">'+data[count].destination+'</td>';

          html += '<td contenteditable="false" class="column_name" data-column_name="price" data-bus_id="'+data[count].bus_id+'">'+data[count].price+'</td>';

  
     html += '<td><button type="button" class="btn btn-danger btn-xs delete" bus_id="'+data[count].bus_id+'">Delete</button></td></tr>';

    }
    $('tbody').html(html);
   }
  });
 }
//search function
$('#search').on('keyup',function(){
$value=$(this).val();

if ($value!='') {

$.ajax({
type : 'get',
 url:"/search",
// url : '{{URL::to('search')}}',
data:{'search':$value},
success:function(data){
$('tbody').html(data);

}

});
}else{
  fetch_data();
}
})

 var _token = $('input[name="_token"]').val();


 $(document).on('click', '#add', function(){
  var bus_id = $('#bus_id').val();
  var bus_model = $('#bus_model').val();
  var seats = $('#seats').val();
  var departure_time = $('#departure_time').val();
  var Arrival_Time = $('#Arrival_Time').val();
  var entry_point = $('#entry_point').val();
  var destination = $('#destination').val();
  var price = $('#price').val();
  
  // if(bus_id != '' && bus_model != ''&& seats != ''&& departure_time != ''&& Arrival_Time!= ''&& entry_point != '' && destination != ''&& price != '')
  // {
   $.ajax({
    url:"{{ route('bus_contro1.add_data') }}",
    method:"POST",
    data:{bus_id:bus_id,bus_model:bus_model,seats:seats,departure_time:departure_time,    Arrival_Time:Arrival_Time,entry_point:entry_point,destination:destination,price:price,_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  // }
  // else
  // {
  //  $('#message').html("<div class='alert alert-danger'>All Fields are required</div>");
  // }
 });

 $(document).on('blur', '.column_name', function(){
  var column_name = $(this).data("column_name");
  var column_value = $(this).text();
  var bus_id = $(this).data("bus_id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('bus_contro1.update_data') }}",
    method:"POST",
data:{column_name:column_name, column_value:column_value,bus_id:bus_id,_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   })
  }
  else
  {
   $('#message').html("<div class='alert alert-danger'>Enter some value</div>");
  }
 });

 $(document).on('click', '.delete', function(){
  var bus_id = $(this).attr("bus_id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('bus_contro1.delete_data') }}",
    method:"POST",
    data:{bus_id:bus_id,_token:_token},
    success:function(data)
    {
     $('#message').html(data);
     fetch_data();
    }
   });
  }
 });
});
</script>
