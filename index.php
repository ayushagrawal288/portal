<?php


session_start();
if($_SESSION['admin']){
  mysql_close($db_handle);
  header("Location:caretakerhome.php");
  break;
}
else if($_SESSION['employ']){
  mysql_close($db_handle);
  header ("Location: overdue.php");
  break;
}

else{

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

<div class="jumbotro text-center" >
    <p class="heading" >Welcome to the 
    </br>Online Complaint Portal
    </br>of LNMIIT</p>
    <a href="a.php"  style=""><button class="portal">Enter Portal</button></a>
</div>



</body>
</html>
