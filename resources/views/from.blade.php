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
    <b style="font-size:30px;">SELECT Your Journey Here</b>
    <br>
  </div>
    <br>
<div >
<center><form action="fromenter" method="post">
  @csrf


 <center> <h2>Choose a Journey from:</h2>

  <select id="from" name="entry_point">
    @foreach($data as $dd)
    <option  value="{{$dd->entry_point}} " name="entry_point">{{$dd->entry_point}} </option>
    @endforeach
  </select>


<h2>Choose a Journey To:</h2>
  <select id="from" name="destination">
   @foreach($data as $dd)
    <option value="{{$dd->destination}}" name="destination">{{$dd->destination}} </option>
    @endforeach 
  </select>
<br/>
<br/>

  <!-- <button type="submit" value="Submit" style="font-size:20px;">Submit</button> -->

<button class="btn btn-info" type="submit">Search buses</button>


  
</form></center>
   
</div>
</div>

</body>
</html