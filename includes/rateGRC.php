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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='GeForce1030')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='GeForce1030' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='GeForce1030';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','GeForce1030','$ratings');";
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
  $Oldratings = $_POST['review2'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='GeForce1050Ti')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='GeForce1050Ti' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='GeForce1050Ti';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','GeForce1050Ti','$ratings');";
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
  $Oldratings = $_POST['review3'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='GeForce1650')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='GeForce1650' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='GeForce1650';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','GeForce1650','$ratings');";
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
  $Oldratings = $_POST['review4'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='GeForceRTX2070')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='GeForceRTX2070' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='GeForceRTX2070';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','GeForceRTX2070','$ratings');";
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
  $Oldratings = $_POST['review5'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='GeForceRTX2080')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='GeForceRTX2080' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='GeForceRTX2080';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','GeForceRTX2080','$ratings');";
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
