<?php
include 'config.php';
session_start();
session_destroy();
$msg = "";
if (isset($_POST['user_login_submit'])) {
	$password = $_POST['password'];
	$email = $_POST['email'];
	
	$SQL = "SELECT * FROM user";
	$result = mysql_query($SQL);
	while ($db_field = mysql_fetch_assoc($result)) {
		$a = $db_field['email'];
		$b = $db_field['password'];
		$c = $db_field['job'];
		if(($email == $a) AND ($password == $b)){
			if($c=='care_taker'){
				session_start();
				$_SESSION['username'] = $email;
				$_SESSION['admin'] = "log";
				mysql_close($db_handle);
				header("Location: caretakerverify.php");
				break;
			}
			else{
				session_start();
				$_SESSION['username'] = $email;
				$_SESSION['employ'] = "log";
				mysql_close($db_handle);
				header("Location: overdue.php");
				break;
			}
		}
		else{
			$msg = "Incorrect username or password";
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
  <div class="col-md-6 head_right nav_right">
      <ul>
        <li><a href="login.php">Login</a></li>
      </ul>
  </div>
 </div> 
</div>

<div class="main col-md-6 col-md-offset-3 jumbotro">
	<div class="container">
	  
	  	<div class="col-md-6">
	    
		  <form class="form-horizontal" action="login.php" id="form2" name="login" method="POST">
		  	  <p class="heading">login</p>
		    <div class="control-group">
		      <label class="control-label" for="email">E-mail</label>
		      <div class="controls">
		        <input id="email" name="email" placeholder="" class="form-control input-lg" type="email">
			  </div>
		    </div>
		 <br>
		    <div class="control-group">
		      <label class="control-label" for="password">Password</label>
		      <div class="controls">
		        <input id="password" name="password" placeholder="" class="form-control input-lg" type="password">
		      </div>
		    </div>
		 <br><br>
		 	<div class="control-group">
		      <!-- Button -->
		      <?php echo $msg; ?>
		      <div class="controls">
		      	<input type="submit" name="user_login_submit" class="btn btn-success">
		      </div>
		    </div>
		  
		</form>
		<br>
	    <a href="register.php" class="register">Create New Account</a>
	    </div> 
	  </div>
	</div>

</div>
</body>
</html>
