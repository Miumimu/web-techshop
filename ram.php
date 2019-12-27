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
  <div>
    <form action="sortRAM.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
<fieldset>
<img width="500" height="200" src="img/ram2gb.jpg" alt="ram2.jpg">
  <p>Patriot Signature Line 2GB DDR3 1600MHz Desktop RAM #PSD34G160081</p>
  <label>Price:Tk 1,350</label>
  <form action="ram.php" method="post">
    <select name="quantity1" required/>
       <option value = "blank">Quantity</option>
       <option value = "1">1</option>
       <option value = "2">2</option>
       <option value = "3">3</option>
       <option value = "4">4</option>
       <option value = "5">5</option>
     </select>;
    <button type="submit" name="ram1">Add To Cart</button>
  </form>
    <form action="includes/rateRAM.php" method="post">
    <select name="review1" required/>
       <option value = "blank">Rating</option>
       <option value = "1">1</option>
       <option value = "2">2</option>
       <option value = "3">3</option>
       <option value = "4">4</option>
       <option value = "5">5</option>
     </select>;<button type="submit" name="rat1">Submit</button>
  </form>
</fieldset>
    <br>
<fieldset>
<img width="500" height="200" src="img/ram4gb.jpg" alt="ram4.jpg">
<p>Adata 4GB DDR3 1600MHz Desktop RAM #ADDX1600W4G11-SPU</p>
<label>Price: Tk 1,850</label>
<form action="ram.php" method="post">
  <select name="quantity2" required/>
     <option value = "blank">Quantity</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>;
  <button type="submit" name="ram2">Add To Cart</button>
</form>
<form action="includes/rateRAM.php" method="post">
  <select  name="review2" required/>
     <option value = "blank">Rating</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>;<button type="submit" name="rat2">Submit</button>
</form>
</fieldset>
      <br>
<fieldset>
  <img width="500" height="200" src="img/ramRipjaws.jpg" alt="ramRipjaw.jpg">
    <p>G.Skill Ripjaws V 8GB DDR4 2400 BUS Red Heatsink Desktop RAM #F4-2400C15D-8GVR</p>
    <label>Price:Tk 2,800</label>
    <form action="ram.php" method="post">
      <select name="quantity3" required/>
         <option value = "blank">Quantity</option>
         <option value = "1">1</option>
         <option value = "2">2</option>
         <option value = "3">3</option>
         <option value = "4">4</option>
         <option value = "5">5</option>
       </select>;
      <button type="submit" name="ram3">Add To Cart</button>
    </form>
      <form action="includes/rateRAM.php" method="post">
      <select name="review3" required/>
         <option value = "blank">Rating</option>
         <option value = "1">1</option>
         <option value = "2">2</option>
         <option value = "3">3</option>
         <option value = "4">4</option>
         <option value = "5">5</option>
       </select>;<button type="submit" name="rat3">Submit</button>
    </form>
</fieldset>
        <br>
    <fieldset>
      <img width="500" height="200" src="img/ramTrident.jpg" alt="ramTrident.jpg">
        <p>G.Skill Trident Z Royal 8GB DDR4 3200MHz Silver Heatsink Desktop RAM #F4-3200C16D-16GTRS</p>
        <label>Price:Tk  8,200</label>
        <form action="ram.php" method="post">
          <select name="quantity4" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="ram4">Add To Cart</button>
        </form>
          <form action="includes/rateRAM.php" method="post">
          <select name="review4" required/>
             <option value = "blank">Rating</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;<button type="submit" name="rat4">Submit</button>
        </form>
    </fieldset>
          <br>
      <fieldset>
        <img width="500" height="200" src="img/ramVengeance.jpg" alt="ramVeng.jpg">
          <p>Corsair Vengence LPX 16GB DDR4 3200MHZ Black Heatsink Desktop RAM #CMK16GX4M1E3200C16</p>
          <label>Price: Tk 6,500</label>
          <form action="ram.php" method="post">
            <select class="binputbox" name="quantity5" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="ram5">Add To Cart</button>
          </form>
            <form action="includes/rateRAM.php" method="post">
            <select name="review5" required/>
               <option value = "blank">Rating</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;<button type="submit" name="rat5">Submit</button>
          </form>
      </fieldset>
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
    $query = 'INSERT INTO product_ram(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path) VALUES("RAM2GBpatriot","Hardware Components","Patriot Signature Line 2GB DDR3 1600MHz",1350.00,0,"img/ram2gb.jpg"),
    ("RAM4GBadata","Hardware Components","Adata 4GB DDR3 1600MHz Desktop RAM",1850.00,0,"img/ram4gb.jpg"),
     ("RAM8GBripjaw","Hardware Components","G.Skill Ripjaws V 8GB DDR4 2400 BUS Red Heatsink Desktop RAM",2800.00,0,"img/ramRipjaws.jpg"),
      ("RAM8GBtrident","Hardware Components","G.Skill Trident Z Royal 8GB DDR4 3200MHz Silver Heatsink Desktop RAM",8200.00,0,"img/ramTrident.jpg"),
      ("RAM16GBcorsair","Hardware Components","Corsair Vengence LPX 16GB DDR4 3200MHZ Black Heatsink Desktop RAM",6500.00,0,"img/ramVengeance.jpg");';
    $run_query=mysqli_query($conn,$query);
    $query2 = "DELETE x1 from product_ram x1 inner join product_ram x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
    $run_query2=mysqli_query($conn,$query2);
    if (isset($_POST['ram1']))
    {
      $tot_price = $_POST['quantity1'] * 1350;
      $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','RAM2GBpatriot','$_POST[quantity1]',$tot_price);";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
      $run_query=mysqli_query($conn,$query);
      $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*1350 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='RAM2GBpatriot';";
      $run_query=mysqli_query($conn,$query);
    }
    if (isset($_POST['ram2']))
    {
      $tot_price = $_POST['quantity2'] * 1850;
      $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','RAM4GBadata','$_POST[quantity2]',$tot_price);";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
      $run_query=mysqli_query($conn,$query);
      $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*1850 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='RAM4GBadata';";
      $run_query=mysqli_query($conn,$query);
    }
    if (isset($_POST['ram3']))
    {
      $tot_price = $_POST['quantity3'] * 2800;
      $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','RAM8GBripjaw','$_POST[quantity3]',$tot_price);";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
      $run_query=mysqli_query($conn,$query);
      $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*2800 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='RAM8GBripjaw';";
      $run_query=mysqli_query($conn,$query);
    }
    if (isset($_POST['ram4']))
    {
      $tot_price = $_POST['quantity4'] * 8200;
      $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','RAM8GBtrident','$_POST[quantity4]',$tot_price);";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
      $run_query=mysqli_query($conn,$query);
      $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*8200 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='RAM8GBtrident';";
      $run_query=mysqli_query($conn,$query);
    }
    if (isset($_POST['ram5']))
    {
      $tot_price = $_POST['quantity5'] * 6500;
      $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','RAM16GBcorsair','$_POST[quantity5]',$tot_price);";
      $run_query = mysqli_query($conn,$query);
      $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
      $run_query=mysqli_query($conn,$query);
      $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*6500 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='RAM16GBcorsair';";
      $run_query=mysqli_query($conn,$query);
    }


?>
