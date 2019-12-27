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
    <form action="sortPC.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
    <fieldset>
      <img width="500" height="200" src="img/pr1.jpg" alt="pr1.jpg">
        <p>(Bundle With MB) Intel 9th Gen Coffee Lake Core i3 9100F 3.60GHz-4.20GHz, 4 Core, 6MB Cache LGA1151 Socket Processor</p>
        <label>Price:  Tk 7,600</label>
        <form action="processor.php" method="post">
          <select name="quantity1" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="PR1">Add To Cart</button>
        </form>
        <form action="includes/ratePR.php" method="post">
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
        <img width="500" height="200" src="img/pr2.jpg" alt="pr2.jpg">
        <p>(Bundle With MB) Intel 9th Gen Coffee Lake Core i5 9400F 2.9GHz-4.10GHz 6 Core, 9MB Cache Processor</p>
          <label>Price: Tk 12,900</label>
          <form action="processor.php" method="post">
            <select name="quantity2" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="PR2">Add To Cart</button>
          </form>
          <form action="includes/ratePR.php" method="post">
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
          <img width="500" height="200" src="img/pr3.jpg" alt="pr3.jpg">
            <p>(Single) Intel 9th Gen Coffee Lake Core i7 9700 3.00GHz-4.70GHz, 8 Core, 12MB Cache LGA1151 Socket Processor</p>
            <label>Price:Tk 30,500</label>
            <form action="processor.php" method="post">
              <select name="quantity3" required/>
                 <option value = "blank">Quantity</option>
                 <option value = "1">1</option>
                 <option value = "2">2</option>
                 <option value = "3">3</option>
                 <option value = "4">4</option>
                 <option value = "5">5</option>
               </select>;
              <button type="submit" name="PR3">Add To Cart</button>
            </form>
            <form action="includes/ratePR.php" method="post">
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
            <img width="500" height="200" src="img/pr4.jpg" alt="pr4.jpg">
              <p>(Single) Intel 9th Gen Coffee Lake Core i9 9900 3.10GHz-5.00GHz, 8 Core, 16MB Cache LGA1151 Socket Processor</p>
              <label>Price:  Tk 40,500</label>
              <form action="processor.php" method="post">
                <select name="quantity4" required/>
                   <option value = "blank">Quantity</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                 </select>;
                <button type="submit" name="PR4">Add To Cart</button>
              </form>
              <form action="includes/ratePR.php" method="post">
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
              <img width="500" height="200" src="img/pr5.jpg" alt="pr5.jpg">
                <p>(Single) Intel 9th Gen Coffee Lake Core i9 9900K 3.6GHz-5.0GHz, 8 Core, 16MB Cache LGA1151 Socket Processor</p>
                <label>Price:  Tk 45,000</label>
                <form action="processor.php" method="post">
                  <select name="quantity5" required/>
                     <option value = "blank">Quantity</option>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "5">5</option>
                   </select>;
                  <button type="submit" name="PR5">Add To Cart</button>
                </form>
                <form action="includes/ratePR.php" method="post">
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
if (isset($_POST['PR1']))
{
  $tot_price = $_POST['quantity1'] * 7600;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','COREi3_9thGen3.6GHz','$_POST[quantity1]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity1]',Total_Price='$_POST[quantity1]'*7600 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='COREi3_9thGen3.6GHz';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['PR2']))
{
  $tot_price = $_POST['quantity2'] * 12900;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','COREi5_9thGen2.9GHz','$_POST[quantity2]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity2]',Total_Price='$_POST[quantity2]'*12900 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='COREi5_9thGen2.9GHz';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['PR3']))
{
  $tot_price = $_POST['quantity3'] * 30500;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','COREi7_9thGen3GHz','$_POST[quantity3]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity3]',Total_Price='$_POST[quantity3]'*30500 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='COREi7_9thGen3GHz';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['PR4']))
{
  $tot_price = $_POST['quantity4'] * 40500;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','COREi9_9thGen3.1GHz','$_POST[quantity4]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity4]',Total_Price='$_POST[quantity4]'*40500 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='COREi9_9thGen3.1GHz';";
  $run_query=mysqli_query($conn,$query);
}
if (isset($_POST['PR5']))
{
  $tot_price = $_POST['quantity5'] * 45000;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','COREi9_9thGen3.6GHz','$_POST[quantity5]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  $query = "DELETE x1 from Order_Info x1 inner join Order_Info x2 where x1.Order_No>x2.Order_No and x1.Product_Name = x2.Product_Name;";
  $run_query=mysqli_query($conn,$query);
  $query = "UPDATE Order_Info SET Quantity='$_POST[quantity5]',Total_Price='$_POST[quantity5]'*45000 WHERE Customer_Id='$_SESSION[userID]' and Product_Name='COREi9_9thGen3.6GHz';";
  $run_query=mysqli_query($conn,$query);
}
$query = 'INSERT INTO product_processors(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path) VALUES("COREi3_9thGen3.6GHz","Hardware Components","Intel 9th Gen Coffee Lake Core i3 9100F 3.60GHz-4.20GHz, 4 Core, 6MB Cache LGA1151 Socket Processor",7600.00,0,"img/pr1.jpg"),
("COREi5_9thGen2.9GHz","Hardware Components","Intel 9th Gen Coffee Lake Core i5 9400F 2.9GHz-4.10GHz 6 Core, 9MB Cache Processor",12900.00,0,"img/pr2.jpg"),
("COREi7_9thGen3GHz","Hardware Components","Intel 9th Gen Coffee Lake Core i7 9700 3.00GHz-4.70GHz, 8 Core, 12MB Cache LGA1151 Socket Processor",30500.00,0,"img/pr3.jpg"),
("COREi9_9thGen3.1GHz","Hardware Components","Intel 9th Gen Coffee Lake Core i9 9900 3.10GHz-5.00GHz, 8 Core, 16MB Cache LGA1151 Socket Processor",40500.00,0,"img/pr4.jpg"),
("COREi9_9thGen3.6GHz","Hardware Components","Intel 9th Gen Coffee Lake Core i9 9900K 3.6GHz-5.0GHz, 8 Core, 16MB Cache LGA1151 Socket Processor",45000.00,0,"img/pr5.jpg");';
$run_query=mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_processors x1 inner join product_processors x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);
mysqli_close($conn);

 ?>
