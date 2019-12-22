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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='Gigabyte400W')
    {
      $Newratings = $_POST['review1'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='Gigabyte400W' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='Gigabyte400W';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','Gigabyte400W','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Gigabyte400W' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_PowerSupply SET product_Review='$rating' where product_Name='Gigabyte400W';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../powerS.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='Thermaltake550W')
    {
      $Newratings = $_POST['review2'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='Thermaltake550W' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='Thermaltake550W';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','Thermaltake550W','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Thermaltake550W' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_PowerSupply SET product_Review='$rating' where product_Name='Thermaltake550W';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../powerS.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='CoolerMaster650W')
    {
      $Newratings = $_POST['review3'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='CoolerMaster650W' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='CoolerMaster650W';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','CoolerMaster650W','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='CoolerMaster650W' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_PowerSupply SET product_Review='$rating' where product_Name='CoolerMaster650W';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../powerS.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='Thermaltake650W')
    {
      $Newratings = $_POST['review4'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='Thermaltake650W' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='Thermaltake650W';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','Thermaltake650W','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Thermaltake650W';";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_PowerSupply SET product_Review='$rating' where product_Name='Thermaltake650W';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../powerS.php");
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
    if ($result['userID']==$_SESSION['userID'] && $result['product_NAME']=='Corsair1200W')
    {
      $Newratings = $_POST['review5'];
      $query = "UPDATE hardware_review SET product_Rating ='$Newratings' WHERE product_NAME='Corsair1200W' AND userID='$_SESSION[userID]';";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE FROM hardware_review WHERE product_Rating = '$Oldratings' AND userID = '$_SESSION[userID]' AND product_NAME='Corsair1200W';";
      $run_query = mysqli_query($conn,$query);
    }
  }
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(userID,product_NAME,product_Rating) VALUES ('$_SESSION[userID]','Corsair1200W','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Corsair1200W' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_PowerSupply SET product_Review='$rating' where product_Name='Corsair1200W';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../powerS.php");
    exit();
  }
}
?>
