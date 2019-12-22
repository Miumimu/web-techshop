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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='RAM2GBpatriot')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='RAM2GBpatriot' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='RAM2GBpatriot';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','RAM2GBpatriot','$ratings');";
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
  $Oldratings = $_POST['review2'];
  $query = "SELECT * FROM hardware_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='RAM4GBadata')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='RAM4GBadata' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='RAM4GBadata' AND product_NAME='RAM4GBadata';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','RAM4GBadata','$ratings');";
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
  $Oldratings = $_POST['review3'];
  $query = "SELECT * FROM hardware_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='RAM8GBripjaw')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='RAM8GBripjaw' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='RAM8GBripjaw';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','RAM8GBripjaw','$ratings');";
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
  $Oldratings = $_POST['review4'];
  $query = "SELECT * FROM hardware_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='RAM8GBtrident')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='RAM8GBtrident' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='RAM8GBtrident';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','RAM8GBtrident','$ratings');";
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
  $Oldratings = $_POST['review5'];
  $query = "SELECT * FROM hardware_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='RAM16GBcorsair')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='RAM16GBcorsair' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='RAM16GBcorsair';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','RAM16GBcorsair','$ratings');";
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
