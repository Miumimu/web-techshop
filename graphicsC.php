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
      <form action="sortGRC.php" method="post">
      <button type="submit" name="priceSort">Sort By Price</button>
      <button type="submit" name="reviewSort">Sort By Review</button>
    </form>
<fieldset>
    <img width="500" height="200" src="img/gr1.jpg" alt="gr1.jpg">
      <p>MSI GeForce GT 1030 2GB LP OC Graphics Card #GeForce GT 1030 2GD4 LP OC</p>
      <label>Price: Tk 7,500</label>
      <form action="graphicsC.php" method="post">
        <select name="quantity1" required/>
           <option value = "blank">Quantity</option>
           <option value = "1">1</option>
           <option value = "2">2</option>
           <option value = "3">3</option>
           <option value = "4">4</option>
           <option value = "5">5</option>
         </select>;
        <button type="submit" name="GRC1">Add To Cart</button>
      </form>
      <form action="includes/rateGRC.php" method="post">
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
      <img width="500" height="200" src="img/gr2.jpg" alt="gr2.jpg">
      <p>Asus Phoenix GeForce GTX 1050Ti 4GB GDDR5 Graphics Card #PH-GTX1050TI-4G</p>
        <label>Price: Tk 16,600</label>
        <form action="graphicsC.php" method="post">
          <select name="quantity2" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="GRC2">Add To Cart</button>
        </form>
        <form action="includes/rateGRC.php" method="post">
          <select name="review2" required/>
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
          <img width="500" height="200" src="img/gr3.jpg" alt="gr3.jpg">
            <p>Zotac Gaming GeForce GTX 1650 AMP Edition 4GB GDDR5 Graphics card #ZT-T16500D-10L</p>
            <label>Price:Tk 15,700</label>
            <form action="graphicsC.php" method="post">
              <select name="quantity3" required/>
                 <option value = "blank">Quantity</option>
                 <option value = "1">1</option>
                 <option value = "2">2</option>
                 <option value = "3">3</option>
                 <option value = "4">4</option>
                 <option value = "5">5</option>
               </select>;
              <button type="submit" name="GRC3">Add To Cart</button>
            </form>
            <form action="includes/rateGRC.php" method="post">
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
            <img width="500" height="200" src="img/gr4.jpg" alt="gr4.jpg">
              <p>MSI GeForce RTX 2070 Super Ventus OC 8GB GDDR6 Graphics Card</p>
              <label>Price: Tk 59,500</label>
              <form action="graphicsC.php" method="post">
                <select name="quantity4" required/>
                   <option value = "blank">Quantity</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                 </select>;
                <button type="submit" name="GRC4">Add To Cart</button>
              </form>
              <form action="includes/rateGRC.php" method="post">
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
              <img width="500" height="200" src="img/gr5.jpg" alt="gr5.jpg">
                <p>Asus ROG Strix GeForce RTX 2080 OC edition 11GB GDDR6 Graphics Card #ROG-STRIX-RTX2080TI-O11G-GAMING</p>
                <label>Price:  Tk 97,000</label>
                <form action="graphicsC.php" method="post">
                  <select name="quantity5" required/>
                     <option value = "blank">Quantity</option>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "5">5</option>
                   </select>;
                  <button type="submit" name="GRC5">Add To Cart</button>
                </form>
                <form action="includes/rateGRC.php" method="post">
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
if (isset($_POST['GRC1']))
{
  $tot_price = $_POST['quantity1'] * 7500;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','GeForce1030','$_POST[quantity1]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*7500 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='GeForce1030';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['GRC2']))
{
  $tot_price = $_POST['quantity2'] * 16600;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','GeForce1050Ti','$_POST[quantity2]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*16600 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='GeForce1050Ti';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['GRC3']))
{
  $tot_price = $_POST['quantity3'] * 15700;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','GeForce1650','$_POST[quantity3]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*15700 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='GeForce1650';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['GRC4']))
{
  $tot_price = $_POST['quantity4'] * 59500;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','GeForceRTX2070','$_POST[quantity4]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*59500 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='GeForceRTX2070';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['GRC5']))
{
  $tot_price = $_POST['quantity5'] * 97000;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','GeForceRTX2080','$_POST[quantity5]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*97000 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='GeForceRTX2080';";
  $run_query=mysqli_query($conn,$query);
}
$query = 'INSERT INTO product_GraphicsCard(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path) VALUES("GeForce1030","Hardware Components","MSI GeForce GT 1030 2GB LP OC Graphics Card",7500.00,0,0,"img/gr1.jpg"),
("GeForce1050Ti","Hardware Components","Asus Phoenix GeForce GTX 1050Ti 4GB GDDR5 Graphics Card",16600.00,0,"img/gr2.jpg"),
("GeForce1650","Hardware Components","Zotac Gaming GeForce GTX 1650 AMP Edition 4GB GDDR5 Graphics card",15700,0,"img/gr3.jpg"),
("GeForceRTX2070","Hardware Components","MSI GeForce RTX 2070 Super Ventus OC 8GB GDDR6 Graphics Card",59500.00,0,"img/gr4.jpg"),
("GeForceRTX2080","Hardware Components","Asus ROG Strix GeForce RTX 2080 OC edition 11GB GDDR6 Graphics Card",97000.00,0,"img/gr5.jpg");';
$run_query=mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_GraphicsCard x1 inner join product_GraphicsCard x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);
mysqli_close($conn);
 ?>
