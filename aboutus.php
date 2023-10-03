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
</head>
<body>

<div class="navbar">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <a href="landingpage.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="product.php"><i class="fa fa-fw fa-search"></i> Product</a> 
  <a class="active" href="#"><i class="fa fa-fw fa-envelope"></i> Contact Us</a> 
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> Log Out</a> 
  
</div>


<div class="about-section">
  <h1>About Us Page</h1>
  <h1>Contact us if you need help.</h1>
</div>

<form>
<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="Kyle Melo.jpg" alt="Kyle" style="width:100%">
      <div class="container">
        <h2>Kyle Melo</h2>
        <p class="title">Web Developer</p>
        <p>kyle.melo@lccdo.edu.ph</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="Lance Tagadan.jpg" alt="Lance" style="width:100%">
      <div class="container">
        <h2>Lance Tagadan</h2>
        <p class="title">Web Developer</p>
        <p>lance.tagadan@lccdo.edu.ph</p>
        <p>09061072012</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="Vani Dajang.jpg" alt="Vani" style="width:100%">
      <div class="container">
        <h2>Vani Dajang</h2>
        <p class="title">Web Developer</p>
        <p>vani.dajang@lccdo.edu.ph</p>
        
      </div>
    </div>
  </div>
</div>


</body>
</html>