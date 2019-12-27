<?php
if (isset($_POST['Go_To_Cat']))
{
  header("Location:categories.php");
  exit();
}
if (isset($_POST['Order_Check']))
{
  session_start();
  include "includes/dbh.inc.php";
  $query = "SELECT Product_Name,Total_Price FROM Order_Info WHERE Customer_Id='$_SESSION[userID]' ORDER BY Total_Price ;";
  $result = mysqli_query($conn, "SELECT Product_Name,Total_Price FROM Order_Info WHERE Customer_Id='$_SESSION[userID]' ORDER BY Total_Price ;");
$rows=mysqli_num_rows($result);
  if ($rows<=0)
  {
    header("Location:categories.php");
    exit();
  }
    mysqli_close($conn);
  ?>
   <center><h1>ORDER LIST</h1></center>
   <?php
   $total_Character=10;
   function getTid($total_Character) {
       $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $randomString = '';
       for ($i = 0; $i < $total_Character; $i++) {
           $index = rand(0, strlen($characters) - 1);
           $randomString .= $characters[$index];
       }

       return $randomString;
   }
     $Trans_ID=getTid($total_Character);
     echo "TRANSACTION ID: ".$Trans_ID;
     ?>
  <center>
  <table>
    <thead>
      <th>Product Name</th>
      <th>Price</th>
    </thead>

    <tbody>
      <?php
        foreach($result as $priceResult)
        {
          ?>
          <tr>
            <td> <?php echo $priceResult['Product_Name'];?></td>

            <td> <?php echo $priceResult['Total_Price'];?></td>
          </tr>
        </center>
          <?php

        }

  }

 ?>
