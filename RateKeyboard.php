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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='KB_Micropack')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='KB_Micropack' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='KB_Micropack';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','KB_Micropack','$ratings');";
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
  $Oldratings = $_POST['review2'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='KB_A4_Tech')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='KB_A4_Tech' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]'  AND product_NAME='KB_A4_Tech';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','KB_A4_Tech','$ratings');";
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
  $Oldratings = $_POST['review3'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='KB_Logitech')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='KB_Logitech' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='KB_Logitech';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','KB_Logitech','$ratings');";
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
  $Oldratings = $_POST['review4'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='KB_Rapoo')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='KB_Rapoo' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='KB_Rapoo';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','KB_Rapoo','$ratings');";
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
  $Oldratings = $_POST['review5'];
  $query = "SELECT * FROM Accessories_review;";
  $run_query = mysqli_query($conn,$query);
  while ($result = mysqli_fetch_assoc($run_query))
  {
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='KB_Havit')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='KB_Havit' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessoriese_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='KB_Havit';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','KB_Havit','$ratings');";
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
