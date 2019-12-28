<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Acer Aspire TC-885-UA91 Desktop','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Acer Aspire TC-885-UA91 Desktop' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE desktop SET rating='$rating' where name='Acer Aspire TC-885-UA91 Desktop';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../desktop.php");
    exit();
  }
}
if (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('Dell Inspiron 3470 Desktop','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='Dell Inspiron 3470 Desktop' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE desktop SET rating='$rating' where name='Dell Inspiron 3470 Desktop';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../desktop.php");
    exit();
  }
}
if (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('HP 4NN56AAABA Pavilion','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HP 4NN56AAABA Pavilion' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE desktop SET rating='$rating' where name='HP 4NN56AAABA Pavilion';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../desktop.php");
    exit();
  }
}
if (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('CYBERPOWERPC Gamer Xtreme VR Gaming PC','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='CYBERPOWERPC Gamer Xtreme VR Gaming PC' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE desktop SET rating='$rating' where name='CYBERPOWERPC Gamer Xtreme VR Gaming PC';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../desktop.php");
    exit();
  }
}
if (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('iBUYPOWER Gaming PC Computer Desktop','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='iBUYPOWER Gaming PC Computer Desktop' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE desktop SET rating='$rating' where name='iBUYPOWER Gaming PC Computer Desktop';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../desktop.php");
    exit();
  }
}
?>
