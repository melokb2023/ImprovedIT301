<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => ecommerce
		$conn = mysqli_connect("localhost", "root", "", "ecommerce");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		
		// Taking all 5 values from the form data(input)
		$admin_username = $_REQUEST['username'];
		$admin_email = $_REQUEST['email'];
        $admin_password= $_REQUEST['password_1'];
		$admin_confirmpassword = $_REQUEST['password_2'];
		
		
		if($admin_username  === '' || $admin_email === '' ||  $admin_password === '' || $admin_confirmpassword === '' ){
			echo ('Please fill up the following form');
			
		} 
		
		else if($admin_password != $admin_confirmpassword ){
			echo ('The two passwords do not match');
		}
		
		else {


			$sql = "INSERT INTO adminlogin (AdminUsername, AdminEmail, AdminPassword ,AdminConfirmPassword)
VALUES ('$admin_username','$admin_email', '$admin_password', '$admin_confirmpassword')";

			if (mysqli_query($conn, $sql)) {
				header("Location: http://localhost/ImprovedIT301/", true, 301);
				exit();


			} else {
				echo "ERROR: Hush! Sorry $sql. "
					. mysqli_error($conn);
			}



			// Close connection
			mysqli_close($conn);

		}
		?>
	</center>

 
</body>

</html>
