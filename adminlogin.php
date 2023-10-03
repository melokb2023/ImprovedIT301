<?php
   include("adminconfig.php");
   session_start();

$error = '';
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT AdminID FROM adminlogin WHERE AdminUsername = '$myusername' and AdminPassword = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // $_SESSION("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: admin.php");
      }
      else if($myusername === '' || $mypassword === ''){
         echo('Error!You did not put a username or password.');
         $error = "Fill up the login form.";
		}
      else {
         echo('Error!The one you type does not match with the current data users.');
         $error = "Your Username or Password is invalid.";
		}
   }
?>
<html>
   
   <head>
      <meta charset="UTF-8">
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="adminlogin.css">
	<title>Login Page</title>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
   <form action="" method="post">
		<div class="login-box">
			<h1>Admin Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

		<div class="sign-inbox">
			<input class="button" type="submit"
					name="login" value="Sign In">
      </div>
	 
		<div class="sign-upbox">Don't have an account? <a href="adminindex.php">Register Here</a></div>
		<div class="sign-upbox">You want to be a user?Go to the user page. <a href="login.php">Use This</a></div>
	    <div class = "sign-upbox"><?php echo $error; ?></div>
	</div> 		

    </form>
               
               
					
        </body>
</html>