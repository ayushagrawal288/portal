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
   
    <a href="#file" class="btn btn-info portal " role="button">File Complaint</a>
    <a href="#" class="btn btn-info portal active" role="button" >Check Status</a>
    <br><br>
    
    <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
      <form action="../saveComplain" method="POST" id="form">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="Search" placeholder="Search" type="text" required style="width:680px;height: 38px;border-radius: 12px">
        </div>
       </form>
    </div>
  

  
    <div class="col-md-6  col-md-offset-3 complain">
      <ul>
        <li>Ayush Agrawal</li><hr>
        <li>Ayush Agrawal</li><hr>
        <li>Ayush Agrawal</li><hr>
        <li>Ayush Agrawal</li><hr>
        <li>Ayush Agrawal</li><hr>
        <li>Ayush Agrawal</li>
      </ul>
    </div>
</div>
  <div class="clearfix"></div>
  
</body>
</html>
