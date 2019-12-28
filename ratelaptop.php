<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Acer Spin 3 Convertible Laptop','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Acer Spin 3 Convertible Laptop' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE laptop SET rating='$rating' where name='Acer Spin 3 Convertible Laptop';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../laptop.php");
    exit();
  }
}
if (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Lenovo Flex 14 2-in-1 Convertible Laptop','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Lenovo Flex 14 2-in-1 Convertible Laptop' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE laptop SET rating='$rating' where name='Lenovo Flex 14 2-in-1 Convertible Laptop';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../laptop.php");
    exit();
  }
}
if (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Acer Predator Helios 300 Gaming Laptop PC','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Acer Predator Helios 300 Gaming Laptop PC' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE laptop SET rating='$rating' where name='Acer Predator Helios 300 Gaming Laptop PC';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../laptop.php");
    exit();
  }
}
if (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('ASUS Chromebook C425 Clamshell Laptop','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='ASUS Chromebook C425 Clamshell Laptop' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE laptop SET rating='$rating' where name='ASUS Chromebook C425 Clamshell Laptop';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../laptop.php");
    exit();
  }
}
if (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('MSI P65 Creator-1084','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='MSI P65 Creator-1084' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE laptop SET rating='$rating' where name='MSI P65 Creator-1084';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../laptop.php");
    exit();
  }
}
?>
