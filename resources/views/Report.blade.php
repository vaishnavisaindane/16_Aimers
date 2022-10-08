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
  <x-header2/>
<br><br>
<div style="margin-left: 5%; margin-right: 5%;">
  <table class="table">
  <thead>
    <tr>
       <th scope="col">Route Num</th>
         <th scope="col">Bus Model</th>
         <th scope="col">Seats</th>
         <th scope="col">Departure Time</th>
         <th scope="col">Arrival Time</th>
         <th scope="col">Start Point</th>
         <th scope="col">Destination</th>
         <th scope="col">price</th>
         <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($data1 as $item)
    <tr>
      <th scope="row">{{$item->bus_id}}</th>
      <td>{{$item->bus_model}}</td>
      <td>{{$item->seats}}</td>
      <td>{{$item->departure_time}}</td>
      <td>{{$item->Arrival_Time}}</td>
      <td>{{$item->entry_point}}</td>
      <td>{{$item->destination}}</td>
      <td>{{$item->price}}</td>
      <td><button class="btn btn-primary">
        <a href="check/{{$item->bus_id}}" style="color: black;">See All Booking
        </a>
      </button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</body>
</html>