<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('KB_Micropack','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='KB_Micropack' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_keyboard SET product_Review='$rating' where product_Name='KB_Micropack';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../keyboard.php");
    exit();
  }
}
if (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('KB_A4_Tech','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='KB_A4_Tech' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_keyboard SET product_Review='$rating' where product_Name='KB_A4_Tech';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../keyboard.php");
    exit();
  }
}
if (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('KB_Logitech','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='KB_Logitech' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_keyboard SET product_Review='$rating' where product_Name='KB_Logitech';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../keyboard.php");
    exit();
  }
}
if (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('KB_Rapoo','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='KB_Rapoo' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_keyboard SET product_Review='$rating' where product_Name='KB_Rapoo';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../keyboard.php");
    exit();
  }
}
if (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('KB_Havit','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='KB_Havit' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_keyboard SET product_Review='$rating' where product_Name='KB_Havit';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../keyboard.php");
    exit();
    }
}
?>
