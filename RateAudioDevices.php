<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('AD_H_Beats','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='AD_H_Beats' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_audio_devices SET product_Review='$rating' where product_Name='AD_H_Beats';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../audio devices.php");
    exit();
  }
}
if (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('AD_H_Havit','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='AD_H_Havit' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_audio_devices SET product_Review='$rating' where product_Name='AD_H_Havit';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../audio devices.php");
    exit();
  }
}
if (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('AD_S_F&D','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='AD_S_F&D' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_audio_devices SET product_Review='$rating' where product_Name='AD_S_F&D';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../audio devices.php");
    exit();
  }
}
if (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('AD_S_Havit','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='AD_S_Havit' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_audio_devices SET product_Review='$rating' where product_Name='AD_S_Havit';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../audio devices.php");
    exit();
  }
}
if (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('AD_S_Creative','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='AD_S_Creative' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_audio_devices SET product_Review='$rating' where product_Name='AD_S_Creative';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../audio devices.php");
    exit();
    }
}
?>
