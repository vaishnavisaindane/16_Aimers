<!DOCTYPE html>
<html>
<head>
  <title>BOOK MY TICKET</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<body>
  <x-header/>
<br>

<center>
  <div>
    @foreach($data1 as $item)
    
       <h3>{{$item->entry_point}} to {{$item->destination}}</h3>
         <!-- <th scope="col">{{$item->destination}}</th> -->
    
    @endforeach
  </div>
</center><br>
<div style="margin-left: 5%; margin-right: 5%;">
  <table class="table">
  <thead>
    <tr>
       <th scope="col">booking ID</th>
         <th scope="col">Bus Id</th>
         <!-- <th scope="col">Customer ID</th> -->
         <th scope="col">Name</th>
         <th scope="col">Seat no</th>
         <th scope="col">Mobile</th>
         <th scope="col">Age</th>
         <th scope="col">Gender</th>
         <th scope="col">Amount</th>
         <th scope="col">Discount</th>
         <th scope="col">Paid</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->book_id}}</th>
      <td>{{$item->bus_id}}</td>
      <!-- <td>{{$item->cust_id}}</td> -->
      <td>{{$item->passenger}}</td>
      <td>{{$item->seat}}</td>
      <td>{{$item->mobile}}</td>
      <td>{{$item->age}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->amount}}</td>
      <td>{{$item->discount}}</td>
      <td>{{$item->paid}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>