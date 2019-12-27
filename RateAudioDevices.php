<?php
session_start();
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $Oldratings = $_POST['review1'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='AD_H_Beats')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='AD_H_Beats' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='AD_H_Beats';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','AD_H_Beats','$ratings');";
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
  $Oldratings = $_POST['review2'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='AD_H_Havit')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='AD_H_Havit' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='AD_H_Havit';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','AD_H_Havit','$ratings');";
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
  $Oldratings = $_POST['review3'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='AD_S_F&D')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='AD_S_F&D' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='AD_S_F&D';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','AD_S_F&D','$ratings');";
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
  $Oldratings = $_POST['review4'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='AD_S_Havit')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='AD_S_Havit' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='AD_S_Havit';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','AD_S_Havit','$ratings');";
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
  $Oldratings = $_POST['review5'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='AD_S_Creative')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='AD_S_Creative' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessoriese_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='AD_S_Creative';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','AD_S_Creative','$ratings');";
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
