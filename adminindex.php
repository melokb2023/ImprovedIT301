<!DOCTYPE html>
<html>
<head>
  <title>Admin Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="adminregister.css">
</head>
<body>
  <div class="header">
  	<h2>Admin Register</h2>
  </div>
	
  <form method="post" action="admininsert.php">
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="adminlogin.php">Sign in</a>
  	</p>
  </form>

  
</body>
</html>
