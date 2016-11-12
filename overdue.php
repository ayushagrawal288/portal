<?php
include 'config.php';
session_start();
$user=$_SESSION['username'];
$log = $_SESSION['employ'];

if($log != "log"){
  header("Location: login.php");
}

$sql = "SELECT * FROM user WHERE email = '$user' " ;
$result = mysql_query($sql);
while ($db_field = mysql_fetch_assoc($result)) {  //name loop
    $a = $db_field['name'];
    $b = $db_field['job'];
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
        <div class="col-md-10 head_left logo">
             <h1><a href="index.php">Complaint Portal</a></h1>
        </div>
        <div class="col-md-2 head_right  dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Welcome <?php echo $a; ?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="logout.php">logout</a></li>
            </ul>
        </div>
             
             
        </div>
    </div> 
   <div class=" text-center">
   
    <a href="#file" class="btn btn-info portal " role="button">Due</a>
    <a href="#" class="btn btn-info portal active" role="button" >OverDue</a>
    <br><br>
  

  <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
     <div class="col-md-9">
       <p class="heading head_left">Overdue Complain</p>
     </div>
     <div class="col-md-3">
       <div class="dropdown col-md-3 head_right">
        <form class="form-horizontal" action="caretakerverify.php" id="form1" name="register" method="POST">
      <div class="control-group">
           <div class="controls">
               <select name="hostel" class="btn btn-success">
                 <option value="">Choose your hostel</option>
                  <option value="BH 1" class="btn btn-success">BH 1</option>
                  <option value="BH 2">BH 2</option>
                  <option value="BH 3">BH 3</option>
                  <option value="GH">GH</option>
            </select>
            </div>
        </div>
    </form>
      </div>
     </div>
    </div>
  </div>
  <div class="col-md-6  col-md-offset-3 complain complain1">
      <ul>
<?php

  $sql1 = "SELECT * FROM complain WHERE type='$b' AND status='0'";
  $result1 = mysql_query($sql1);
  while ($db_field = mysql_fetch_assoc($result1)) {
    $c_room = $db_field['room'];
    $c_id = $db_field['id'];
    $c_issue = $db_field['issue'];
    $c_name = $db_field['name'];
    $c_email = $db_field['email'];
    $c_roll = $db_field['roll'];
    $c_date = $db_field['date'];
  
    echo '<li>';
    echo $c_name; 
    echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ';
    echo $c_date; 
    echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp';
    echo $hostel ; 
    echo '&nbsp; &nbsp; &nbsp';
    echo $c_room; 
    echo '&nbsp; &nbsp; &nbsp';
    echo '&nbsp; &nbsp; &nbsp';
    print("<a href = 'markasdone.php?key=".$c_id."'>mark as done</a>");
    echo '<br>';
    echo $c_issue;
    echo '</button></li><hr>';
}
?> 
       
        
      </ul>
    </div>
  <div class="clearfix"></div>


<?php 

} //  close while loop of name loop

?>
 
  
</body>
</html>
