<?php


session_start();
if($_SESSION['admin']){
  mysql_close($db_handle);
  header("Location:caretakerhome.php");
  break;
}



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
   <body style='background-image:url("images/4.jpg");background-size:cover;'>
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
   <div class=" text-center">
   
    <a href="#file" class="btn btn-info portal active" role="button">Due</a>
    <a href="#" class="btn btn-info portal" role="button" >OverDue</a>
    <br><br>
  

  <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
     <div class="col-md-9">
       <p class="heading head_left">Due Complain</p>
     </div>
     <div class="col-md-3">
       <div class="dropdown col-md-3 head_right">
        <button class="dropdown-toggle bh1" type="button" id="menu1" data-toggle="dropdown">Hostel
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php">BH-1</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php">BH-2</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php">BH-3</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="y.php">GH</a></li>
        </ul>
      </div>
     </div>
    </div>
	</div>
  <div class="col-md-6  col-md-offset-3 complain complain1">
      <ul>
        <li>1. Ayush Agrawal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 20/10/16 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;For Fan Not Working<br>            BH-2 A-228 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button class="portal" style="width: 160px;height: 25px;padding:0px;margin: 0 ">Mark as Done</button>
        </li><hr>
         <li>2. Ayush Agrawal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 20/10/16 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;For Fan Not Working<br>            BH-2 A-228 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button class="portal" style="width: 160px;height: 25px;padding:0px;margin: 0 ">Mark as Done</button>
        </li><hr>
         <li>3. Ayush Agrawal &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 20/10/16 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;For Fan Not Working<br>            BH-2 A-228 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <button class="portal" style="width: 160px;height: 25px;padding:0px;margin: 0 ">Mark as Done</button>
        </li><hr>
        
      </ul>
    </div>
  <div class="clearfix"></div>
  
</body>
</html>
