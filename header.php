<header class="header">

   <div class="flex">

      <a href="#" class="logo">New Distance Studios Admin</a>

      <nav class="navbar">
         <a href="adminlogin.php">Log Out</a>
         <a href="admin.php">add products</a>
         <a href="adminproducts.php">view products</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>