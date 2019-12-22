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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='HD500GBtoshiba')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='HD500GBtoshiba' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='HD500GBtoshiba';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','HD500GBtoshiba','$ratings');";
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
  $Oldratings = $_POST['review2'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='HD1TBseagate')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='HD1TBseagate' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='HD1TBseagate';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','HD1TBseagate','$ratings');";
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
  $Oldratings = $_POST['review3'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='HD2TBwestern')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='HD2TBwestern' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='HD2TBwestern';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','HD2TBwestern','$ratings');";
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
  $Oldratings = $_POST['review4'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='HDD12TBironwolf')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='HDD12TBironwolf' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='HDD12TBironwolf';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','HDD12TBironwolf','$ratings');";
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
  $Oldratings = $_POST['review5'];
  $query = "SELECT * FROM hardware_review;";
  $run_query2 = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query2))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='HDD1TBwestern')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='HDD1TBwestern' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='HDD1TBwestern';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','HDD1TBwestern','$ratings');";
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
