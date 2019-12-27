<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="sortMice.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
  <br><br>
    <div>
      <fieldset style="width:700px">
      <img src="img/M_Wire.jpg" width="400" height="300">
      <p> Model - Micropack M101 &nbsp &nbsp
Type - Optical USB Mouse &nbsp &nbsp
Connectivity - Wired </p>
      <b> Price Tk 350 </b>
      <br>
      <form action="" method="post">
        <select name="quantity1">
        <option value = "">Quantity</option>
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
        <option value = "5">5</option>
        <option value = "6">6</option>
        <option value = "7">7</option>
        <option value = "8">8</option>
      </select>
      <button type="submit" name="Mice_1" style="background-color:#228B22; color:white" >Add To Cart</button>
  </form>
</form>
<br>
<form action="includes/RateMice.php" method="post">
  <select name="review1">
     <option value = "blank">Rating</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>
   <button type="submit" name="rat1" style="background-color:#ADD8E6; color:Black">Submit</button>
</form>
    </fieldset>
<br>
<fieldset style="width:700px">
  <img src="img/M_Wireless.jpg" width="400" height="300">
  <p>Model - Tronix i1 &nbsp &nbsp
Type - Wireless Mouse &nbsp &nbsp
Connectivity - Wireless</p>
  <b>Price Tk 340 </b>
  <form action="" method="post">
    <select name="quantity2">
    <option value = "">Quantity</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
  </select>
  <button type="submit" name="Mice_2" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateMice.php" method="post">
  <select name="review2">
     <option value = "blank">Rating</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>
   <button type="submit" name="rat2" style="background-color:#ADD8E6; color:Black">Submit</button>
</form>
</fieldset>
<br>

<fieldset style="width:700px">
  <img src="img/M_Gaming.jpg" width="400" height="300">
  <p>Model - Havit MS997GT &nbsp &nbsp
Type - Wireless Gaming Optical Mouse &nbsp &nbsp
Connectivity - Wireless</p>
  <b> Price Tk 580</b>
  <form action="" method="post">
    <select name="quantity3">
    <option value = "">Quantity</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
  </select>
  <button type="submit" name="Mice_3" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateMice.php" method="post">
  <select name="review3">
     <option value = "blank">Rating</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>
   <button type="submit" name="rat3" style="background-color:#ADD8E6; color:Black">Submit</button>
</form>
</fieldset>
<br>

<fieldset style="width:700px">
  <img src="img/M_Wire2.jpg" width="400" height="300">
  <p>Model - A4 Tech OP-550NU &nbsp &nbsp
Type - Optical Mouse &nbsp &nbsp
Connectivity - USB</p>
  <b> Price Tk 420</b>
  <form action="" method="post">
    <select name="quantity4">
    <option value = "">Quantity</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
  </select>
  <button type="submit" name="Mice_4" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateMice.php" method="post">
  <select name="review4">
     <option value = "blank">Rating</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>
   <button type="submit" name="rat4" style="background-color:#ADD8E6; color:Black">Submit</button>
</form>
</fieldset>
<br>

<fieldset style="width:700px">
  <img src="img/M_Wire3.jpg" width="400" height="300">
  <p>Dell MS116 Optical USB Mouse</p>
  <b> Price Tk 350</b>
  <form action="" method="post">
    <select name="quantity5">
    <option value = "">Quantity</option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
    <option value = "6">6</option>
    <option value = "7">7</option>
    <option value = "8">8</option>
  </select>
  <button type="submit" name="Mice_5" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateMice.php" method="post">
  <select name="review5">
     <option value = "blank">Rating</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>
   <button type="submit" name="rat5" style="background-color:#ADD8E6; color:Black">Submit</button>
</form>
</fieldset>

<br>
<br>
<form action="orderPrint.php" method="post">
  <button type="submit" name="Go_To_Cat">Return To Category</button>
  <button type="submit" name="Order_Check">ORDER!</button>
</form>
    </div>
  </body>
</html>
<?php
include "includes/dbh.inc.php";
$query = 'INSERT INTO product_mice(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path)
VALUES("M_Micropack","Accessories","Model - Micropack M101 Type - Optical USB Mouse Connectivity - Wired ",350,0,"img/M_Wire.jpg"),
("M_Tronix","Accessories","Model - Tronix i1 Type - Wireless Mouse Connectivity - Wireless",340,0,"img/M_Wireless.jpg"),
("M_Havit","Accessories","Model - Havit MS997GT Type - Wireless Gaming Optical Mouse Connectivity - Wireless",580,0,"img/M_Gaming.jpg"),
("M_A4 Tech","Accessories","Model - A4 Tech OP-550NU Type - Optical Mouse Connectivity - USB",420,0,"img/M_Wire2.jpg"),
("M_Dell","Accessories","Dell MS116 Optical USB Mouse",350,0,"img/M_Wire3.jpg");
';
$run_query=mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_mice x1 inner join product_mice x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);



if (isset($_POST['Mice_1']))
{
  $tot_price = $_POST['quantity1'] * 350;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','M_Micropack','$_POST[quantity1]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*350 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='M_Micropack';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Mice_2']))
{
  $tot_price = $_POST['quantity2'] * 340;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','M_Tronix','$_POST[quantity2]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*340 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='M_Tronix';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Mice_3']))
{
  $tot_price = $_POST['quantity3'] * 580;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','M_Havit','$_POST[quantity3]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*580 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='M_Havit';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Mice_4']))
{
  $tot_price = $_POST['quantity4'] * 420;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','M_A4 Tech','$_POST[quantity4]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*420 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='M_A4 Tech';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Mice_5']))
{
  $tot_price = $_POST['quantity5'] * 350;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','M_Dell','$_POST[quantity5]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*350 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='M_Dell';";
  $run_query=mysqli_query($conn,$query);
}
 ?>
