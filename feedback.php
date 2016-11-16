<?php
include 'config.php';
session_start();
session_destroy();
$msg = "";
if (isset($_POST['feedback'])) {
	$suggestion = $_POST['suggestion'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$hostel = $_POST['hostel'];
	

		$SQL1 = "INSERT INTO feedback(email,suggestion,name,hostel) VALUES ('$email','$suggestion','$name','$hostel')";
		$result1=mysql_query($SQL1);
		if($result1){
			mysql_close($db_handle);
			print("<SCRIPT LANGUAGE='JavaScript'>alert('Submit Succesfully!')</script><script>location.href = 'index.php'</script>");
		}
		else{
			$msg = "error";
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

  
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <li><a href="login.php" style="font-size: 1.6em;color: #fff;padding-top: 22px">Login</a></li>
      </ul>
  </div>
 </div> 
</div>

<div class="main col-md-6 col-md-offset-3 jumbotro">
	<div class="container">
	  <div class="row">
	  	<div class="col-md-6">
	    
		  <form class="form-horizontal" action="feedback.php" id="form1" name="register" method="POST">
		   <p class="heading">Register</p>
		    
		 
		 <div class="control-group">
		      <label class="control-label" for="email">E-mail</label>
		      <div class="controls">
		        <input id="email" name="email" placeholder="" class="form-control input-2x" type="email">
		        
		      </div>
		    </div>
		 <div class="control-group">
		      <label class="control-label" for="name">name</label>
		      <div class="controls">
		        <input id="name" name="name" placeholder="" class="form-control input-2x" type="text">
		       
		      </div>
		    </div>
		<div class="control-group">
		      <label class="control-label" for="Hostel">hostel</label>
		      <div class="controls">
		        
		        <select name="hostel" class="btn btn-success">
				    <option value="BH 1" class="btn btn-success">BH 1</option>
				    <option value="BH 2">BH 2</option>
				    <option value="BH 3">BH 3</option>
				    <option value="GH">GH</option>
			  </select>
		      </div>
		    </div>
		 <div class="control-group">
		      <label class="control-label" for="suggestion">Suggestion</label>
		      <div class="controls">
		        <input id="name" name="suggestion" placeholder="" class="form-control input-lg" type="text">
		       
		      </div>
		    </div>
		 
		    
		 <br>
		    <div class="control-group">
		      <!-- Button -->
		      <?php echo $msg ; ?>
		      <div class="controls">
		      	<input type="submit" name="feedback" class="btn btn-success">
		      </div>
		    </div>
		 
		</form>
	    
	    </div> 
	  </div>
	</div>

</div>
</body>
</html>
	
