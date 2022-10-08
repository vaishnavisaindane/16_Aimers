<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>

	<x-header/>
	<div class="container">
	<table class="table table-bordered">


		<tr>
		<th><h4>seats</h4></th>	
		<th><h4>type</h4></th>
		<tr>	
		<td>1 to 10</td>
		<td>(1,4,5,8,9)window</td>
		</tr>
		<tr>
		<td>11 to 20</td>
		<td>(11,12,15,16,19,20)window</td>
		</tr>
		<td>20 to 27</td>
		<td>(11,12,15,16,19,20)window</td>
		</tr>
	</table>
</div>
	<div class="container">
    @if(session()->has('msg'))
              <div class="alert alert-success">
                        {{ session()->get('msg') }}
                    </div>
      @endif 
      @if(session()->has('msgw'))
              <div class="alert alert-danger">
                        {{ session()->get('msgw') }}
                    </div>
      @endif
<form method="post" action="/controllbooking">
	@csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Bus_Model</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="bus_id" value="{{ Session::get('bus_model')}}">
  </div>
  <div class="form-group">
    <div class="form-group">
    <label for="exampleInputEmail1">Customer No</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="cust_id">
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">seat</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="seat" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Passenger Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="passenger" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">mobile</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="mobile" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Age</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="age" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Gender</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="gender" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="text" class="form-control" id="exampleInputEmail1"
     class="form-text text-muted" name="amount" value="{{Session::get('price')}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>  
</body>
</html>