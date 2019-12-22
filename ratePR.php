<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('COREi3_9thGen3.6GHz','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='COREi3_9thGen3.6GHz' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_processors SET product_Review='$rating' where product_Name='COREi3_9thGen3.6GHz';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../processor.php");
    exit();
  }
}
elseif (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('COREi5_9thGen2.9GHz','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='COREi5_9thGen2.9GHz' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_processors SET product_Review='$rating' where product_Name='COREi5_9thGen2.9GHz';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../processor.php");
    exit();
  }
}
elseif (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('COREi7_9thGen3GHz','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='COREi7_9thGen3GHz' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_processors SET product_Review='$rating' where product_Name='COREi7_9thGen3GHz';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../processor.php");
    exit();
  }
}
elseif (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('COREi9_9thGen3.1GHz','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='COREi9_9thGen3.1GHz';";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_processors SET product_Review='$rating' where product_Name='COREi9_9thGen3.1GHz';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../processor.php");
    exit();
  }
}
elseif (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('COREi9_9thGen3.6GHz','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='COREi9_9thGen3.6GHz' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_processors SET product_Review='$rating' where product_Name='COREi9_9thGen3.6GHz';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../processor.php");
    exit();
  }
}
?>
