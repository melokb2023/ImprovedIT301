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
		$user_name = $_REQUEST['username'];
		$email = $_REQUEST['email'];
        $password_1 = $_REQUEST['password_1'];
		$password_2 = $_REQUEST['password_2'];
		$errors = array(); 
        
       
		if($user_name  === '' || $email === '' ||  $password_1 === '' || $password_2 === '' ){
			echo ('Please fill up the following form');
		} 
		else if($password_1 != $password_2 ){
			echo ('The two passwords do not match');
		}
		else {

			$sql = "INSERT INTO userlogin (username, email, password_1,password_2)
VALUES ('$user_name','$email', '$password_1', '$password_2')";

			if (mysqli_query($conn, $sql)) {
				// echo "<h3>data stored in a database successfully."
				// 	. " Please browse your localhost php my admin"
				// 	. " to view the updated data</h3>";
		
				// echo nl2br("\n$user_name\n $email\n $password_1 \n $password_2 ");
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
