<?php
session_start();
if($_SESSION['admin']){
  mysql_close($db_handle);
  header("Location:caretakerhome.php");
  break;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portal for Repair Issues in Hostel</title>
  <link rel="shortcut icon" href="images/favicon.jpg" type="image/x-icon">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="To file comllaint regarding maintenance of hostels and Academic area of LNMIIT.">
  <meta name="author" content="Ayush Agrawal, Shubhanshu Vijay, Akhilesh Maheshwari, Meha Mittal, Harshita Sodani, Pooja Pilania">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </head>


<body style='background-image:url("images/x.jpg");background-size:cover;'>
  <div class="header ">
    <div class="container">
      <div class="col-md-6 head_left logo">
           <h1><a href="index.php">Complaint Portal</a></h1>
      </div>
      <div class="col-md-6 head_right nav_right">
          <ul>
            <li><a href="login.php">Login</a></li>
          </ul>
      </div>
    </div> 
  </div>

  <div class="jumbotro text-center" >
   <p class="heading">You are Resident of</p><br><br>
    <div class="container">
      <div class="dropdown col-md-3">
        <button class="dropdown-toggle bh1" type="button" id="menu1" data-toggle="dropdown">BH1
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key=BH 1&type=electrician">Electrician</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key=BH 1&type=carpenter">Carpenter</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key=BH 1&type=it_helpdesk">IT Helpdesk</a></li>
        </ul>
      </div>
      <div class="dropdown col-md-3">
        <button class="bh1 dropdown-toggle" type="button" id="menu2" data-toggle="dropdown">BH2
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='BH 2'&type='electrician'">Electrician</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='BH 2'&type='carpenter'">Carpenter</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='BH 2'&type='it_helpdesk'">IT Helpdesk</a></li>
        </ul>
      </div>
      <div class="dropdown col-md-3">
        <button class="bh1 dropdown-toggle" type="button" id="menu3" data-toggle="dropdown">BH3
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu3">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='BH 3'&type='electrician'">Electrician</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='BH 3'&type='carpenter'">Carpenter</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='BH 3'&type='it_helpdesk'">IT Helpdesk</a></li>
        </ul>
      </div>
      <div class="dropdown col-md-3">
        <button class="bh1 dropdown-toggle" type="button" id="menu4" data-toggle="dropdown">GH
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='GH'&type='electrician'">Electrician</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='GH'&type='carpenter'">Carpenter</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php?key='GH'&type='it_helpdesk'">IT Helpdesk</a></li>
        </ul>
      </div>
  
</div>
</div>

</body>
</html>   
