<?php
session_start();
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $Oldratings = $_POST['review1'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='COREi3_9thGen3.6GHz')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='COREi3_9thGen3.6GHz' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='COREi3_9thGen3.6GHz';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','COREi3_9thGen3.6GHz','$ratings');";
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
  $Oldratings = $_POST['review2'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='COREi5_9thGen2.9GHz')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='COREi5_9thGen2.9GHz' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='COREi5_9thGen2.9GHz';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','COREi5_9thGen2.9GHz','$ratings');";
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
  $Oldratings = $_POST['review3'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='COREi7_9thGen3GHz')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='COREi7_9thGen3GHz' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='COREi7_9thGen3GHz';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','COREi7_9thGen3GHz','$ratings');";
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
  $Oldratings = $_POST['review4'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='COREi9_9thGen3.1GHz')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='COREi9_9thGen3.1GHz' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='COREi9_9thGen3.1GHz';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','COREi9_9thGen3.1GHz','$ratings');";
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
  $Oldratings = $_POST['review5'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='COREi9_9thGen3.6GHz')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='COREi9_9thGen3.6GHz' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='COREi9_9thGen3.6GHz';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','COREi9_9thGen3.6GHz','$ratings');";
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
