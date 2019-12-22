<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('RAM2GBpatriot','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RAM2GBpatriot' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_ram SET product_Review='$rating' where product_Name='RAM2GBpatriot';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../ram.php");
    exit();
  }
}
if (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('RAM4GBadata','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RAM4GBadata' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_ram SET product_Review='$rating' where product_Name='RAM4GBadata';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../ram.php");
    exit();
  }
}
if (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('RAM8GBripjaw','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RAM8GBripjaw' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_ram SET product_Review='$rating' where product_Name='RAM8GBripjaw';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../ram.php");
    exit();
  }
}
if (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('RAM8GBtrident','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RAM8GBtrident' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_ram SET product_Review='$rating' where product_Name='RAM8GBtrident';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../ram.php");
    exit();
  }
}
if (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('RAM16GBcorsair','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RAM16GBcorsair' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_ram SET product_Review='$rating' where product_Name='RAM16GBcorsair';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../ram.php");
    exit();
    }
}
?>
