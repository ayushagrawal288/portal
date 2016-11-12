<?php
include 'config.php';
session_start();
$user=$_SESSION['username'];
$log = $_SESSION['admin'];

if($log != "log"){
  header("Location: login.php");
}
$msg = "";

$SQL = "SELECT * FROM user WHERE email='$user'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['hostel'];
		if($a!=''){
				mysql_close($db_handle);
				header("Location: caretakerhome.php");
				break;
		}
		else{
			if (isset($_POST['hostel_submit'])) {
				$hostel = $_POST['hostel'];
				$SQL1 = "UPDATE user SET hostel = '$hostel' WHERE email='$user'";
				$result1=mysql_query($SQL1);
				if($result1){
					mysql_close($db_handle);
					print("<script>location.href = 'caretakerhome.php'</script>");
				}
			  }
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
 
 </div> 
</div>

<div class="main col-md-6 col-md-offset-3 jumbotro">
	<div class="container">
	  <div class="row">
	  	<div class="col-md-6 col-md-offset-2">
	    
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
		    </div><br><br>
		    <div class="control-group">
		      <!-- Button -->
		      <?php echo $msg ; ?>
		      <div class="controls">
		      	<input type="submit" name="hostel_submit" class="btn btn-success">
		      </div>
		    </div>
		 
		</form>
	    
	    </div> 
	  </div>
	</div>

</div>
</body>
</html>
	
