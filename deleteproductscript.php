<?php

include("product.php");
if(isset($_GET['delete'])){

    $id= $_GET['delete'];
  delete_data($connection, $productid);

}

// delete data query
function delete_data($connection, $id){
   
    $query="DELETE from productCRUDsupervision WHERE productID=$id";
    $exec= mysqli_query($connection,$query);

    if($exec){
      header('location:user-table.php');
    }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
      echo $msg;
    }
}
?>