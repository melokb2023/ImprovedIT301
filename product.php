<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url("cyberpunk.jpg");
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: yellow;
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: yellow;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<title>Products</title>

</head>
<body>

<div class="navbar">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <a href="landingpage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a class="active" href="#"><i class="fa fa-fw fa-search"></i> Product</a> 
  <a href="aboutus.php"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Log Out</a> 
</div>


<div class="about-section">
  <h1>Products</h1>
  <h2>Prices may vary overtime.You may have to contact the admin for more information.</h2>
</div>

<h2 style="text-align:center">List of Products</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="CDProjekt.jpg" style="width:100%">
      <div class="container">
        <h2>CD Projekt Red Gear</h2>
        <p class="title">$ 500</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="V.gif" style="width:100%">
      <div class="container">
        <h2>Male V Figure</h2>
        <p class="title">$  750</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Jacket.jpg" style="width:100%">
      <div class="container">
        <h2>Samurai Hoodie</h2>
        <p class="title">$ 230</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Cyberpunk VC.jpg" style="width:100%">
      <div class="container">
        <h2>GeForce RTX 280 Ti</h2>
        <p class="title">$ 1750</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Johnny.jpg" style="width:100%">
      <div class="container">
        <h2>Johnny Silverhand Figure</h2>
        <p class="title">$  800</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Cyberpunk Adidas.gif" style="width:100%">
      <div class="container">
        <h2>Addidas Cyperpunk</h2>
        <p class="title">$ 500</p>
        
      </div>
    </div>
  </div>
</div>

<form action="products.php" method="post">
<div class="sign-inbox">
			<input class="button" type="submit"
					name="login" value="Order Products">
      </div>
</form>	 
</body>
</html>