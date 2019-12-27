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
    <form action="sortAudioDevices.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
<br><br>
    <div>
      <fieldset style="width:700px">
      <img src="img/H_Bluetooth1.jpg" width="300" height="300">
      <p>  Model - Beats Solo3 Wireless &nbsp &nbsp
Connectivity - Wireless</p>
      <b> Price Tk 24,410</b>
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
      <button type="submit" name="Headphone_1" style="background-color:#228B22; color:white" >Add To Cart</button>
  </form>
  <form action="includes/RateAudioDevices.php" method="post">
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
  <img src="img/H_Wired.jpg" width="300" height="300">
  <p>Model - Havit HV-H2213d &nbsp &nbsp
    Connectivity - Wired Cable &nbsp &nbsp
    Length (ft) - 7.2ft</p>
  <b>Price Tk 990 </b>
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
  <button type="submit" name="Headphone_2" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateAudioDevices.php" method="post">
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
  <img src="img/S_Tv.jpg" width="300" height="300">
  <p>Model - F&D A521X &nbsp &nbsp
    Type - Bluetooth Speaker &nbsp &nbsp
    Channel - 2:1 &nbsp &nbsp
    FM Radio - Yes</p>
  <b>Price Tk 4,610</b>
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
  <button type="submit" name="Speaker_3" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateAudioDevices.php" method="post">
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
  <img src="img/S_Bluetooth.jpg" width="300" height="300">
  <p>Model - Havit M67 &nbsp &nbsp
    Type- Portable Bluetooth Speaker &nbsp &nbsp
   RMS/Channel(Watt)- 3Watt x 2 &nbsp &nbsp
   USB Port -Yes &nbsp &nbsp
   Bluetooth Range-10 Meter &nbsp &nbsp
   Battery - 3.7V/1200mAh &nbsp &nbsp
   Specialty- Multi-function wireless speaker</p>
  <b> Price Tk 1,690</b>
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
  <button type="submit" name="Speaker_4" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateAudioDevices.php" method="post">
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
  <img src="img/S_Bluetooth2.jpg" width="300" height="300">
  <p>Model - Creative Muvo 2C &nbsp &nbsp
Type - Bluetooth Speaker &nbsp &nbsp
USB Port - Yes (Micro USB) &nbsp &nbsp
Battery - 650mAh Built-in Li-ion &nbsp &nbsp
Specialty - Palm-sized Water-resistant Bluetooth Speaker with Built-in MP3 Player</p>
  <b> Price  Tk 3,910</b>
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
  <button type="submit" name="Speaker_5" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateAudioDevices.php" method="post">
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
$query = 'INSERT INTO product_audio_devices(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path)
VALUES ("AD_H_Beats","Accessories","Model - Beats Solo3 Wireless Connectivity - Wireless",24410,0,"img/H_Bluetooth1.jpg"),
("AD_H_Havit","Accessories","Model - Havit HV-H2213d Connectivity - Wired Cable Length (ft) - 7.2ft",990,0,"img/H_Wired.jpg"),
("AD_S_F&D","Accessories","Model - F&D A521X Type - Bluetooth Speaker Channel - 2:1 FM Radio - Yes",4610,0,"img/S_Tv.jpg"),
("AD_S_Havit","Accessories","Model - Havit M67 Type- Portable Bluetooth Speaker RMS/Channel(Watt)- 3Watt x 2 USB Port -Yes Bluetooth Range-10 Meter Battery - 3.7V/1200mAh Specialty- Multi-function wireless speaker",1690,0,"img/S_Bluetooth.jpg"),
("AD_S_Creative","Accessories","Model - Creative Muvo 2C Type - Bluetooth Speaker USB Port - Yes (Micro USB) Battery - 650mAh Built-in Li-ion Specialty - Palm-sized Water-resistant Bluetooth Speaker with Built-in MP3 Player",3910,0,"img/S_Bluetooth2.jpg");

';

$run_query=mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_audio_devices x1 inner join product_audio_devices x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);





if (isset($_POST['Headphone_1']))
{
  $tot_price = $_POST['quantity1'] * 24410;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','AD_H_Beats','$_POST[quantity1]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*24410 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='AD_H_Beats';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Headphone_2']))
{
  $tot_price = $_POST['quantity2'] * 990;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','AD_H_Havit','$_POST[quantity2]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*990 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='AD_H_Havit';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Speaker_3']))
{
  $tot_price = $_POST['quantity3'] * 4610;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','AD_S_F&D','$_POST[quantity3]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*4610 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='AD_S_F&D';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Speaker_4']))
{
  $tot_price = $_POST['quantity4'] * 1690;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','AD_S_Havit','$_POST[quantity4]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*1690 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='AD_S_Havit';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['Speaker_5']))
{
  $tot_price = $_POST['quantity5'] * 3910;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','AD_S_Creative','$_POST[quantity5]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*3910 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='AD_S_Creative';";
  $run_query=mysqli_query($conn,$query);
}


?>
