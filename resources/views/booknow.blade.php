<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
  <style>
      
.abc{
  border-color:#DCDCDC;border-style:solid;border-width:2px 8px 2px 8px;
  margin-left: 5%;
  margin-right: 5%;

}
@media (max-width:600px){

.abc{
  border-color:white;border-style:solid;border-width:0px 0px 0px 0px;
  margin-left: 0%;
  margin-right: 0%;
}
}
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}

  </style>
</head>
<body style="overflow-x: hidden;">
 <x-header/>
<br>
<br>
<br>

<div class="abc">
  <br>
  <div class="col-sm-12" style="background: linear-gradient(90deg, #d9e7ff 0%, #e3ffe7 100%);">
    <br>
    <b style="font-size:30px;">SELECT BUS FROM BELOW LIST</b>
    <br>
  </div>
    <br>
<div >
   <table>
    <thead>
    <tr>     
      <th>Bus no</th>
      <th >Bus Model</th>
      <th>Seats</th>
      <th >Departure Time</th>
      <th>Arrival Time</th>
      <th >Entry Point </th>
      <th >Destination </th>
      <th >Price Per Seat</th>
      <th >Book Now</th>
    </tr>
    </thead>
     <tbody> 
     @foreach($d1 as $dd1)
      <tr>
        
        <td>{{$dd1->bus_id}}</td>
        <td>{{$dd1->bus_model}}</td>
        <td>{{$dd1->seats}}</td>
       <td>{{$dd1->departure_time}}</td>
       <td>{{$dd1->Arrival_time}}</td>
       <td>{{$dd1->entry_point}}</td>
       <td>{{$dd1->destination}}</td>
       <td>{{$dd1->price}}</td>
       <td><a href="book/{{$dd1->bus_id}}" class="btn btn-info">Book Seat</a></td>


   <!--  <td><input type="button" class="btn btn-info" value="{{$dd1->bus_id}}" onclick="set_exam_type_session(this.value)" placeholder="Start Exam"></td>
      </tr>   -->
    
 <!-- <td><input type="button" class="btn btn-info" value="{{$dd1->bus_id}}" placeholder="Start Exam"></td> -->
      </tr>  
    @endforeach

    </tbody>
</table>
</div>
</div>

<script type="text/javascript">
    function set_exam_type_session(exam__id) {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function(){
          if(xmlhttp.readyState==4 && xmlhttp.status== 200){
              window.location="fetchexamdata/"+exam__id;
          }
        };
        xmlhttp.open("GET","stud_table",true);
        xmlhttp.send(null);
    }

</script>

</body>
</html