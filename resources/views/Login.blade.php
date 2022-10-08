<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <!-- font awesome cdn -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box;}


body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  overflow-y: hidden;


}

.header {
  overflow: hidden;
  background-color: black;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: greenyellow;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
  
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

 .content{
    margin-top: 50px;
    margin-left: 300px;
 }          

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

  /* footer */
  .footer {
    text-align: center;
    background-color: #16161d;
    margin-top: 190px;
  }
  
  .footer .logo {
    font-size: 2rem;
    color: var(--light-bg);
    font-weight: 700;
  }
  
  .footer .logo span {
    font-weight: normal;
  }
  
  .footer p {
    margin-top: 2rem;
    margin-bottom: 2rem;
    font-size: 1.7rem;
    color: white;
    padding: 30px;
  }
  
  .footer .socials ion-icon {
    font-size: 2.5rem;
    color: var(--black);
    background: var(--light-bg);
    border-radius: 50%;
    padding: 1rem;
    margin: 0.5rem;
    cursor: pointer;
  }
  
  .footer .socials ion-icon:nth-child(1) {
    color: var(--google-color);
  }
  
  .footer .socials ion-icon:nth-child(1):hover {
    background: var(--google-color);
    color: var(--white);
  }
  
  .footer .socials ion-icon:nth-child(2) {
    color: var(--twitter-color);
  }
  
  .footer .socials ion-icon:nth-child(2):hover {
    background: var(--twitter-color);
    color: var(--white);
  }
  
  .footer .socials ion-icon:nth-child(3) {
    color: var(--youtube-color);
  }
  
  .footer .socials ion-icon:nth-child(3):hover {
    background: var(--youtube-color);
    color: var(--white);
  }
  
  .footer .socials ion-icon:nth-child(4) {
    color: var(--linkedin-color);
  }
  
  .footer .socials ion-icon:nth-child(4):hover {
    background: var(--linkedin-color);
    color: var(--white);
  }
  /* footer */

</style>
</head>
<body style="background-color:white;">
  <x-header/>
	<div class="header">
  <!-- <a href="#default" class="logo"><i class='fas fa-bus' style='font: size 25px; color:greenyellow'></i>&nbsp;Bus Locator</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="#login">Login</a>
    <a href="#updatelocation">Bus Location</a>
  </div>
</div> -->
<div class="content">
    <h2>Login form</h2>
    <form  action="" method="post">
      
      <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" style="width: 400px;" class="form-control"  id="uname" placeholder="Enter Username" name="uname">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" style="width: 400px;" class="form-control" id="pwd" placeholder="Enter Password" name="pass">
      </div>  
      
      <button type="submit" class="btn btn-success">Submit</button>
  
</div>

  <!-- footer section ends -->
  
</body>
</html>