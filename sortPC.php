<?php
include "includes/dbh.inc.php";
if (isset($_POST['priceSort']))
{
if(!mysqli_connect_errno())
{
  $result = mysqli_query($conn, "SELECT product_Name,product_Price FROM product_processors ORDER BY product_Price");
  mysqli_close($conn);
}
?>
 <center><h1>Sort By Price</h1></center>
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
          <td> <?php echo $priceResult['product_Name'];?></td>
          <td> <?php echo $priceResult['product_Price'];?></td>
        </tr>
      </center>
        <?php

      }
}
     ?>
<?php
if (isset($_POST['reviewSort']))
{

  if(!mysqli_connect_errno())
  {
    $result = mysqli_query($conn, "SELECT product_Name,product_Review FROM product_processors ORDER BY product_Review");
    mysqli_close($conn);
  }
  ?>
   <center><h1>Sort By Review</h1></center>
<center>
  <table>
    <thead>
      <th>Product Name</th>
      <th>Review</th>
    </thead>

    <tbody>
      <?php
        foreach($result as $reviewResult)
        {
          ?>
          <tr>
            <td> <?php echo $reviewResult['product_Name'];?></td>
            <td> <?php echo $reviewResult['product_Review'];?></td>
          </tr>
        </center>
          <?php

        }

}
       ?>
