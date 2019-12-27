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

    <form action="sortKeyboard.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
  <br><br>
    <div>
      <fieldset style="width:700px">
      <img src="img/Key_1.jpg" width="500" height="300">
      <p>  Model - Micropack K2208 &nbsp &nbsp
        Type - USB Mini Keyboard &nbsp &nbsp
        Interface - USB 2.0</p>
      <b> Price Tk 520 </b>
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
      <button type="submit" name="Key_1" style="background-color:#228B22; color:white" >Add To Cart</button>
  </form>
  <br>
  <form action="includes/RateKeyboard.php" method="post">
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
  <img src="img/Key_2.jpg" width="500" height="300">
  <p>A4 Tech KR-85 Black USB Keyboard with Bangla</p>
  <b>Price Tk 690 </b>
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
  <button type="submit" name="Key_2" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateKeyboard.php" method="post">
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
  <img src="img/Key_3.jpg" width="500" height="300">
  <p>Logitech K480 Bluetooth Multi Device Black Keyboard</p>
  <b> Price Tk 3,080</b>
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
  <button type="submit" name="Key_3" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateKeyboard.php" method="post">
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
  <img src="img/Key_4.jpg" width="500" height="300">
  <p>Model - Rapoo NK2500 &nbsp &nbsp
    Type - USB Wired Keyboard &nbsp &nbsp
    Interface - USB</p>
  <b> Price Tk 530</b>
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
  <button type="submit" name="Key_4" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateKeyboard.php" method="post">
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
  <img src="img/Key_5.jpg" width="500" height="300">
  <p>Model - Havit KB465L &nbsp &nbsp
     Type - Gaming keyboard &nbsp &nbsp
     Interface - USB</p>
  <b> Price Tk 880</b>
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
  <button type="submit" name="Key_5" style="background-color:#228B22; color:white">Add To Cart</button>
</form>
<form action="includes/RateKeyboard.php" method="post">
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
  $query = 'INSERT INTO product_keyboard(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path)
  VALUES("KB_Micropack","Accessories","Model - Micropack K2208 Type - USB Mini Keyboard Interface - USB 2.0",520,0,"img/Key_1.jpg"),
("KB_A4_Tech","Accessories","A4 Tech KR-85 Black USB Keyboard with Bangla",690,0,"img/Key_2.jpg"),
("KB_Logitech","Accessories","Logitech K480 Bluetooth Multi Device Black Keyboard",3080,0,"img/Key_3.jpg"),
("KB_Rapoo","Accessories","Model - Rapoo NK2500 Type - USB Wired Keyboard Interface - USB",530,0,"img/Key_4.jpg"),
("KB_Havit","Accessories","Model - Havit KB465L Type - Gaming keyboard Interface - USB",880,0,"img/Key_5.jpg");
  ';


  $run_query=mysqli_query($conn,$query);
  $query2 = "DELETE x1 from product_keyboard x1 inner join product_keyboard x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
  $run_query2=mysqli_query($conn,$query2);




  if (isset($_POST['Key_1']))
  {
    $tot_price = $_POST['quantity1'] * 520;
    $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','KB_Micropack','$_POST[quantity1]',$tot_price);";
    $run_query = mysqli_query($conn,$query);
    $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
    $run_query=mysqli_query($conn,$query);
    $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*520 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='KB_Micropack';";
    $run_query=mysqli_query($conn,$query);
  }
  if (isset($_POST['Key_2']))
  {
    $tot_price = $_POST['quantity2'] * 690;
    $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','KB_A4_Tech','$_POST[quantity2]',$tot_price);";
    $run_query = mysqli_query($conn,$query);
    $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
    $run_query=mysqli_query($conn,$query);
    $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*690 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='KB_A4_Tech';";
    $run_query=mysqli_query($conn,$query);
  }
  if (isset($_POST['Key_3']))
  {
    $tot_price = $_POST['quantity3'] * 3080;
    $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','KB_Logitech','$_POST[quantity3]',$tot_price);";
    $run_query = mysqli_query($conn,$query);
    $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
    $run_query=mysqli_query($conn,$query);
    $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*3080 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='KB_Logitech';";
    $run_query=mysqli_query($conn,$query);
  }
  if (isset($_POST['Key_4']))
  {
    $tot_price = $_POST['quantity4'] * 530;
    $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','KB_Rapoo','$_POST[quantity4]',$tot_price);";
    $run_query = mysqli_query($conn,$query);
    $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
    $run_query=mysqli_query($conn,$query);
    $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*530 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='KB_Rapoo';";
    $run_query=mysqli_query($conn,$query);
  }
  if (isset($_POST['Key_5']))
  {
    $tot_price = $_POST['quantity5'] * 880;
    $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','KB_Havit','$_POST[quantity5]',$tot_price);";
    $run_query = mysqli_query($conn,$query);
    $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
    $run_query=mysqli_query($conn,$query);
    $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*880 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='KB_Havit';";
    $run_query=mysqli_query($conn,$query);
  }
 ?>
