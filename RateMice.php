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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='M_Micropack')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='M_Micropack' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='M_Micropack';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','M_Micropack','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='M_Micropack' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_mice SET product_Review='$rating' where product_Name='M_Micropack';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../mice.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='M_Tronix')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='M_Tronix' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='M_Tronix';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','M_Tronix','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='M_Tronix' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_mice SET product_Review='$rating' where product_Name='M_Tronix';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../mice.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='M_Havit')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='M_Havit' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='M_Havit';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','M_Havit','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='M_Havit' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_mice SET product_Review='$rating' where product_Name='M_Havit';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../mice.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='M_A4 Tech')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='M_A4 Tech' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessories_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='M_A4 Tech';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','M_A4 Tech','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='M_A4 Tech' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_mice SET product_Review='$rating' where product_Name='M_A4 Tech';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../mice.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='M_Dell')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE Accessories_review SET product_Rating ='$Newratings' WHERE product_NAME='M_Dell' AND userID = '$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM Accessoriese_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='M_Dell';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO Accessories_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','M_Dell','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM Accessories_review where product_NAME='M_Dell' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_mice SET product_Review='$rating' where product_Name='M_Dell';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../mice.php");
    exit();
    }
}
?>
