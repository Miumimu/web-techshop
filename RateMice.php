<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('M_Micropack','$ratings');";
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
  $ratings = $_POST['review2'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('M_Tronix','$ratings');";
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
  $ratings = $_POST['review3'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('M_Havit','$ratings');";
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
  $ratings = $_POST['review4'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('M_A4 Tech','$ratings');";
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
  $ratings = $_POST['review5'];
  $query = "INSERT INTO Accessories_review(product_NAME,product_Rating) VALUES ('M_Dell','$ratings');";
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
