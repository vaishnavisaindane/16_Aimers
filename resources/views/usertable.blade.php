<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

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
  td:nth-of-type(1):before { content: "book id:"; }
  td:nth-of-type(2):before { content: "bus: "; }
  td:nth-of-type(3):before { content: "booked by: "; }
  td:nth-of-type(4):before { content: "seat:"; }
  td:nth-of-type(5):before { content: "passenger:"; }
  td:nth-of-type(6):before { content: "mobile:"; }
  td:nth-of-type(7):before { content: "age:"; }
  td:nth-of-type(8):before { content: "gender:"; }
  td:nth-of-type(9):before { content: "amount:"; }
  td:nth-of-type(10):before { content: "paid:"; }
  td:nth-of-type(11):before { content: "Action:"; }
}
</style>
</head>
<body>
    <x-header/>
    <x-header2/>
<!-- update button -->
<button href="#"  class="btn btn-primary"  role="button" id="btninfo" style="float: right; "><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><div id="myDIV" style="font-size:20px; display: inline-block;" >Update (Double click)</div></button><br><br><br>
   <div class="panel panel-default">
    <div class="panel-heading">
<!-- Search btn -->
<div style="float: right;"><input style="padding: 5px 30px;" type="text" placeholder="Search" class="form-controller" id="search_exam" name="search_exam"></input></div>
          <div id="result"></div><br><br>
    </div>
    <div class="panel-body">
     <div id="message"></div>
     <div class="table-responsive">
<!-- table -->
<table class="table table-striped table-bordered">
       <thead>
        <tr>
        <th  style="width: 3%;">Book Id</th>
         <th  style="width: 15%;">Bus Model</th>
         <th  style="width: 5%;">Booked by</th>
         <th  style="width: 5%;">seat</th>
         <th  style="width: 5%;">passenger</th>
         <th  style="width: 5%;">Mobile</th>
         <th  style="width: 3%;">Age</th>
         <th  style="width: 9%;">Gender</th>
         <th  style="width: 7%;">Amount</th>
         <th  style="width: 7%;">Paid</th>
         <th  style="width: 7%;">Action</th>
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
   url:"/user_livetable/fetch_data",
   dataType:"json",
   success:function(data)
   {
    var html = '';
    html += '<tr>';
    html += '<td contenteditable="true" id="book_id"></td>';
    html += '<td contenteditable="true" id="bus_id "></td>';
    html += '<td contenteditable="true" id="cust_id"></td>';
    html += '<td contenteditable="true" id="seat"></td>';
    html += '<td contenteditable="true" id="passenger"></td>';
    html += '<td contenteditable="true" id="mobile"></td>';
    html += '<td contenteditable="true" id="age"></td>';
    html += '<td contenteditable="true" id="gender"></td>';
    html += '<td contenteditable="true" id="amount"></td>';
    html += '<td contenteditable="true" id="paid"></td>';
    for(var count=0; count < data.length; count++)
    {
     html +='<tr>';

     html +='<td contenteditable="false" class="column_name" data-column_name="book_id" data-book_id="'+data[count].book_id+'">'+data[count].book_id+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="bus_id " data-book_id="'+data[count].book_id+'">'+data[count].bus_id+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="cust_id" data-book_id="'+data[count].book_id+'">'+data[count].cust_id+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="seat " data-book_id="'+data[count].book_id+'">'+data[count].seat+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="passenger " data-book_id="'+data[count].book_id+'">'+data[count].passenger+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="mobile" data-book_id="'+data[count].book_id+'">'+data[count].mobile+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="age" data-book_id="'+data[count].book_id+'">'+data[count].age+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="gender" data-book_id="'+data[count].book_id+'">'+data[count].gender+'</td>';

     html += '<td contenteditable="false" class="column_name" data-column_name="amount " data-book_id="'+data[count].book_id+'">'+data[count].amount+'</td>';

      html += '<td contenteditable="false" class="column_name" data-column_name="paid" data-book_id="'+data[count].book_id+'">'+data[count].paid+'</td>';


  
     html += '<td><button type="button" class="btn btn-danger btn-xs delete" book_id="'+data[count].book_id+'">Delete</button></td></tr>';

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

 $(document).on('blur', '.column_name', function(){
  var column_name = $(this).data("column_name");
  var column_value = $(this).text();
  var book_id = $(this).data("book_id");
  
  if(column_value != '')
  {
   $.ajax({
    url:"{{ route('user_livetable.update_data') }}",
    method:"POST",
data:{column_name:column_name, column_value:column_value,book_id:book_id,_token:_token},
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
  var book_id = $(this).attr("book_id");
  if(confirm("Are you sure you want to delete this records?"))
  {
   $.ajax({
    url:"{{ route('user_livetable.delete_data') }}",
    method:"POST",
    data:{book_id:book_id,_token:_token},
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



