<?php
include 'config.php';
session_start();
if($_SESSION['admin']){
  mysql_close($db_handle);
  header("Location:caretakerhome.php");
  break;
}

$msg = "";

if (isset($_POST['complain_submit'])) {
 

 global $hostel , $type ;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $room = $_POST['room'];
  $date =date('Y-m-d');
  $issue = $_POST['issue'];
  $roll = $_POST['roll'];
  $hostel = $_POST['hostel'];
  $type = $_POST['type'];
  
 $SQL1 = "INSERT INTO complain(email,name,room,date,issue,roll,hostel,type) VALUES ('$email','$name','$room','$date','$issue','$roll','$hostel','$type')";
  $result1=mysql_query($SQL1);
  if($result1){
     mysql_close($db_handle);
     print("<SCRIPT LANGUAGE='JavaScript'>alert('Submit Succesfully!')</script><script>location.href = 'index.php'</script>");
    
        

  }
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
   
    <a href="y.php" class="btn btn-info portal active" role="button">File Complaint</a>
    <a href="status.php" class="btn btn-info portal" role="button" >Check Status</a>
    <br><br>
  

  <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
      <form action="y.php" method="POST" id="form" role='form'>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
		    <div class="col-sm-4 form-group">
          <input class="form-control" id="rollno" name="roll" placeholder="Roll No." type="Roll No." required>
        </div>
         <div class="col-sm-4 form-group">
          <input class="form-control" id="hostel" name="room" placeholder="Room" type="Area" required>
        </div>
        <div class="col-sm-4 form-group">
          <select name="hostel" class="btn btn-success">
             
              <option value="BH 1" class="btn btn-success">BH 1</option>
              <option value="BH 2">BH 2</option>
              <option value="BH 3">BH 3</option>
              <option value="GH">GH</option>
              <option value="faculty">faculty offices</option>
              <option value="lt_area">lt area</option>
            </select>
        </div>
        <div class="col-sm-4 form-group">
          <select name="type" class="btn btn-success">
              
              <option value="electrician" class="btn btn-success">electrician</option>
              <option value="carpenter">car painter</option>
              <option value="it_helpdesk">It helpdesk</option>
          </select>
        </div>
        <textarea  class="form-control" id="issue" name="issue" placeholder="Issue" rows="2"></textarea><br>
        <div class="col-sm-4 form-group">
          <input type="submit" name="complain_submit" class="btn btn-default">
        </div>
       </form>
    </div>
	</div>
  <div class="clearfix"></div>
  
</body>
</html>
