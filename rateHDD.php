<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('HD500GBtoshiba','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HD500GBtoshiba' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_hardDrives SET product_Review='$rating' where product_Name='HD500GBtoshiba';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../hardDrives.php");
    exit();
  }
}
elseif (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('HD1TBseagate','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HD1TBseagate' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_hardDrives SET product_Review='$rating' where product_Name='HD1TBseagate';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../hardDrives.php");
    exit();
  }
}
elseif (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('HD2TBwestern','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HD2TBwestern' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_hardDrives SET product_Review='$rating' where product_Name='HD2TBwestern';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../hardDrives.php");
    exit();
  }
}
elseif (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('HDD12TBironwolf','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HDD12TBironwolf' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_hardDrives SET product_Review='$rating' where product_Name='HDD12TBironwolf';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../hardDrives.php");
    exit();
  }
}
elseif (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('HDD1TBwestern','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HDD1TBwestern' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_hardDrives SET product_Review='$rating' where product_Name='HDD1TBwestern';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../hardDrives.php");
    exit();
  }
}
?>
