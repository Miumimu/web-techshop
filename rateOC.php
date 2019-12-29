<?php
include "dbh.inc.php";
if (isset($_POST['rat1']))
{
  $ratings = $_POST['review1'];
  $query = "INSERT INTO officect_review(product_NAME,product_Rating) VALUES ('AcerSB220Q','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='AcerSB220Q' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_officeComponents SET product_Review='$rating' where product_Name='AcerSB220Q';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../officeComponents.php");
    exit();
  }
}
elseif (isset($_POST['rat2']))
{
  $ratings = $_POST['review2'];
  $query = "INSERT INTO officect_review(product_NAME,product_Rating) VALUES ('HPOfficeJet3830','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='HPOfficeJet3830' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_officeComponents SET product_Review='$rating' where product_Name='HPOfficeJet3830';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../officeComponents.php");
    exit();
  }
}
elseif (isset($_POST['rat3']))
{
  $ratings = $_POST['review3'];
  $query = "INSERT INTO officect_review(product_NAME,product_Rating) VALUES ('RavenOriginalDocumentScanner','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RavenOriginalDocumentScanner' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_officeComponents SET product_Review='$rating' where product_Name='RavenOriginalDocumentScanner';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../officeComponents.php");
    exit();
  }
}
elseif (isset($_POST['rat4']))
{
  $ratings = $_POST['review4'];
  $query = "INSERT INTO officect_review(product_NAME,product_Rating) VALUES ('CanonD1620','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='CanonD1620' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_officeComponents SET product_Review='$rating' where product_Name='CanonD1620';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../officeComponents.php");
    exit();
  }
}
elseif (isset($_POST['rat5']))
{
  $ratings = $_POST['review5'];
  $query = "INSERT INTO officect_review(product_NAME,product_Rating) VALUES ('BrotherFAX-2840','$ratings');";
  $run_query = mysqli_query($conn,$query);
  $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='BrotherFAX-2840' ;";
  $run_query = mysqli_query($conn,$query);
  while ($row = mysqli_fetch_assoc($run_query))
  {
    $rating = $row['avg(product_Rating)'];
  }
    $query = "UPDATE product_officeComponents SET product_Review='$rating' where product_Name='BrotherFAX-2840';";
    $run_query = mysqli_query($conn,$query);
    if ($run_query)
    {
    header("Location:../officeComponents.php");
    exit();
  }
}
?>