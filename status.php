<?php
include 'config.php';

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
   <body style='background-image:url("images/4.jpg");background-size:cover;'>
   <div class="header ">
      <div class="container">
        <div class="col-md-6 head_left logo">
             <h1><a href="index.php">Complaint Portal</a></h1>
        </div>
        <div class="col-md-6 head_right nav_right">
            <ul style="list-style: none;">
        <li style="display: inline;"><a href="login.php" class="btn right" style="font-size: 1.6em;color: #fff;padding-top: 0px">Login</a></li>
        <li style="display: inline;"><a href="feedback.php" class="btn right" style="font-size: 1.6em;color: #fff;padding-top:0px">Feedback</a></li>
      </ul>
        </div>
       </div> 
  </div>
   <div class=" text-center">
   
    <a href="y.php" class="btn btn-info portal " role="button">File Complaint</a>
    <a href="status.php" class="btn btn-info portal active" role="button" >Check Status</a>
    <br><br>
    
    <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
      <form action="status.php" method="POST" id="form">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="email" placeholder="Email id" type="text" required style="width:680px;height: 38px;"><br>
          <input type="submit" name="submit" class="form-control" value="submit">
        </div>
       </form>
    </div>
 <div class="clearfix"></div>
<?php

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $sql = "SELECT * FROM complain WHERE email='$email' and status='0' ";
  $result = mysql_query($sql);
  while($db_field=mysql_fetch_assoc($result)){
    $c_room = $db_field['room'];
    $c_type = $db_field['type'];
    $c_issue = $db_field['issue'];
    $c_name = $db_field['name'];
    $c_email = $db_field['email'];
    $c_roll = $db_field['roll'];
    $c_date = $db_field['date'];
    $hostel = $db_field['hostel'];

   echo  ' <div class="col-md-6  col-md-offset-3 complain ">
  <ul>';
       echo '<li>';
      echo $c_name; 
      echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ';
      echo $c_date; 
      echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp';
      echo $hostel ; 
      echo '&nbsp; &nbsp; &nbsp';
      echo $c_room; 
      echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp';
      echo $c_type; 
      echo '<br>';
      echo $c_issue;
      echo '</button></li><hr><ul>
 </div>';


  }
  mysql_query($SQL1);
  }


?>
     
</div>
  <div class="clearfix"></div>
  </div>
</body>
</html>
