<?php





include 'config.php';
session_start();
unset($user);
$user=$_SESSION['username'];
$log = $_SESSION['admin'];

if($log != "log"){
  header("Location: login.php");
}

$SQL3 = "SELECT * FROM user WHERE email='$user'";
$result3 = mysql_query($SQL3);
while ($db_field = mysql_fetch_assoc($result3)) {
    $hostel = $db_field['hostel'];
    if($hostel==''){
        mysql_close($db_handle);
        header("Location: caretakerverify.php");
        break;
    }
    else{


$sql = "SELECT * FROM user WHERE email = '$user' " ;
$result = mysql_query($sql);
while ($db_field = mysql_fetch_assoc($result)) {
    $a = $db_field['name'];
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
   
   
  

  <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
     
       <p class="heading head_left">Overdue Complain</p>
       
    </div>
  </div>
  <div class="col-md-6  col-md-offset-3 complain complain1">
  <ul>
<?php
  $today = date('Y-m-d');
  $sql1 = "SELECT * FROM complain WHERE hostel='$hostel' AND status='0'";
  $result1 = mysql_query($sql1);
  while ($db_field = mysql_fetch_assoc($result1)) {
    $c_room = $db_field['room'];
    $c_type = $db_field['type'];
    $c_issue = $db_field['issue'];
    $c_name = $db_field['name'];
    $c_email = $db_field['email'];
    $c_roll = $db_field['roll'];
    $c_date = $db_field['date'];
    $days = (int)((strtotime($today) - strtotime($c_date))/(60*60*24));
    if($days>3){
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
      echo '</button></li><hr>';
  }
}?> 
  </ul></div>
 <div class="clearfix"></div>
  </div>
  <div id="file" class="col-md-12" >
    <div class="col-md-6  col-md-offset-3">
     
       <p class="heading head_left">Feedback</p>
       
    </div>
  </div>
  <div class="col-md-6  col-md-offset-3 complain complain1">
      <ul>

<?php

  $sql1 = "SELECT * FROM feedback WHERE hostel='$hostel'";
  $result1 = mysql_query($sql1);
  while ($db_field = mysql_fetch_assoc($result1)) {
    $suggestion = $db_field['suggestion'];
    $name = $db_field['name'];
    $email = $db_field['email'];

  
    echo '<li>';
    echo $name; 
    echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ';
    echo $email; 
    echo '&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp';
    echo $suggestion ; 
    echo '&nbsp; &nbsp; &nbsp';
   
    echo '</li><hr>';

        
}?>         
        
        
      </ul>

    </div>
  <div class="clearfix"></div>
  <br><br>
  </div>

<?php 
       //  for complain while loop
    } //for name while loop
 } //for checking hostel else 
} //for checking hostel while loop
mysql_close($db_handle);
?>  
</body>
</html>
