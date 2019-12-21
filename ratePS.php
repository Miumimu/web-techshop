<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Gigabyte400W','$ratings');";
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
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Thermaltake550W','$ratings');";
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
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('CoolerMaster650W','$ratings');";
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
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Thermaltake650W','$ratings');";
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
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Corsair1200W','$ratings');";
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
