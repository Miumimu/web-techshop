<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('GeForce1030','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='GeForce1030' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_GraphicsCard SET product_Review='$rating' where product_Name='GeForce1030';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../graphicsC.php");
    exit();
  }
}
elseif (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('GeForce1050Ti','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='GeForce1050Ti' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_GraphicsCard SET product_Review='$rating' where product_Name='GeForce1050Ti';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../graphicsC.php");
    exit();
  }
}
elseif (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('GeForce1650','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='GeForce1650' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_GraphicsCard SET product_Review='$rating' where product_Name='GeForce1650';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../graphicsC.php");
    exit();
  }
}
elseif (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('GeForceRTX2070','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='GeForceRTX2070';";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_GraphicsCard SET product_Review='$rating' where product_Name='GeForceRTX2070';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../graphicsC.php");
    exit();
  }
}
elseif (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('GeForceRTX2080','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='GeForceRTX2080' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_GraphicsCard SET product_Review='$rating' where product_Name='GeForceRTX2080';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../graphicsC.php");
    exit();
  }
}
?>
