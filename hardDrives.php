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
    <form action="sortHDD.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
    <fieldset>
      <img width="500" height="200" src="img/hd1.jpg" alt="hd1.jpg">
        <p>Toshiba 500GB 2.5 Inch SATA 5400RPM Notebook HDD #MQ01ABD050/MQ01ABF050M/HDWK105UZSVA</p>
        <label>Price: Tk 3,500</label>
        <form action="hardDrives.php" method="post">
          <select name="quantity1" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="HDD1">Add To Cart</button>
        </form>
          <form action="includes/rateHDD.php" method="post">
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
        <img width="500" height="200" src="img/hd2.jpg" alt="hd2.jpg">
          <p>Seagate Barracuda35 1TB 2.5 Inch SATA 5400RPM Notebook HDD #ST1000LM048</p>
          <label>Price: Tk 4,200</label>
          <form action="hardDrives.php" method="post">
            <select name="quantity2" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="HDD2">Add To Cart</button>
          </form>
            <form action="includes/rateHDD.php" method="post">
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
          <img width="500" height="200" src="img/hd3.jpg" alt="hd3.jpg">
            <p>Western Digital Blue 2TB 3.5 Inch SATA 5400RPM Desktop HDD #WD20EZRZ</p>
            <label>Price: Tk 5,400</label>
            <form action="hardDrives.php" method="post">
              <select name="quantity3" required/>
                 <option value = "blank">Quantity</option>
                 <option value = "1">1</option>
                 <option value = "2">2</option>
                 <option value = "3">3</option>
                 <option value = "4">4</option>
                 <option value = "5">5</option>
               </select>;
              <button type="submit" name="HDD3">Add To Cart</button>
            </form>
            <form action="includes/rateHDD.php" method="post">
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
            <img width="500" height="200" src="img/hd4.jpg" alt="hd4.jpg">
              <p>Seagate IronWolf 12TB 3.5 Inch SATA 7200RPM NAS HDD #ST12000VN0007/ST12000VN0008</p>
              <label>Price: Tk 43,000</label>
              <form action="hardDrives.php" method="post">
                <select name="quantity4" required/>
                   <option value = "blank">Quantity</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                 </select>;
                <button type="submit" name="HDD4">Add To Cart</button>
              </form>
              <form action="includes/rateHDD.php" method="post">
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
              <img width="500" height="200" src="img/hd5.jpg" alt="hd5.jpg">
                <p>Western Digital Purple 1TB 3.5 Inch SATA 5400RPM Surveillance HDD #WD10PURZ</p>
                <label>Price: Tk 4,100</label>
                <form action="hardDrives.php" method="post">
                  <select name="quantity5" required/>
                     <option value = "blank">Quantity</option>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "5">5</option>
                   </select>;
                  <button type="submit" name="HDD5">Add To Cart</button>
                </form>
                  <form action="includes/rateHDD.php" method="post">
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
  </body>
</html>
<?php
include "includes/dbh.inc.php";
if (isset($_POST['HDD1']))
{
  $tot_price = $_POST['quantity1'] * 3500;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','HD500GBtoshiba','$_POST[quantity1]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*3500 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='HD500GBtoshiba';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['HDD2']))
{
  $tot_price = $_POST['quantity2'] * 4200;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','HD1TBseagate','$_POST[quantity2]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*4200 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='HD1TBseagate';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['HDD3']))
{
  $tot_price = $_POST['quantity3'] * 5400;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','HD2TBwestern','$_POST[quantity3]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*5400 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='HD2TBwestern';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['HDD4']))
{
  $tot_price = $_POST['quantity4'] * 43000;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','HDD12TBironwolf','$_POST[quantity4]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*43000 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='HDD12TBironwolf';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['HDD5']))
{
  $tot_price = $_POST['quantity5'] * 4100;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','HDD1TBwestern','$_POST[quantity5]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*4100 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='HDD1TBwestern';";
  $run_query=mysqli_query($conn,$query);
}
$query = 'INSERT INTO product_hardDrives(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path) VALUES("HD500GBtoshiba","Hardware Components","Toshiba 500GB 2.5 Inch SATA 5400RPM Notebook HDD",3500.00,0,"img/hd1.jpg"),
("HD1TBseagate","Hardware Components","Seagate Barracuda35 1TB 2.5 Inch SATA 5400RPM Notebook HDD",4200.00,0,"img/hd2.jpg"),
("HD2TBwestern","Hardware Components","Western Digital Blue 2TB 3.5 Inch SATA 5400RPM Desktop HDD",5400.00,0,"img/hd3.jpg"),
("HDD12TBironwolf","Hardware Components","Seagate IronWolf 12TB 3.5 Inch SATA 7200RPM NAS HDD",43000.00,0,"img/hd4.jpg"),
("HDD1TBwestern","Hardware Components","Western Digital Purple 1TB 3.5 Inch SATA 5400RPM Surveillance HDD",4100.00,0,"img/hd5.jpg");';
$run_query = mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_hardDrives x1 inner join product_hardDrives x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);
mysqli_close($conn);
 ?>
