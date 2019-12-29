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
    <form action="sortOC.php" method="post">
    <button type="submit" name="priceSort">Sort By Price</button>
    <button type="submit" name="reviewSort">Sort By Review</button>
  </form>
    <fieldset>
      <img width="500" height="200" src="img/oc1.png" alt="Acer SB220Q">
        <p>Acer SB220Q bi 21.5 inches Full HD (1920 x 1080) IPS Ultra-Thin Zero Frame Monitor (HDMI & VGA port)</p>
        <label>Price: 89.99$</label>
        <form action="officeComponents.php" method="post">
          <select name="quantity1" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="OC1">Add To Cart</button>
        </form>
          <form action="includes/rateOC.php" method="post">
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
        <img width="500" height="200" src="img/oc2.png" alt="HP OfficeJet 3830">
          <p>HP OfficeJet 3830 All-in-One Wireless Printer, HP Instant Ink & Amazon Dash Replenishment Ready (K7V40A)</p>
          <label>Price: 4443/-</label>
          <form action="officeComponents.php" method="post">
            <select name="quantity2" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="OC2">Add To Cart</button>
          </form>
            <form action="includes/rateOC.php" method="post">
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
          <img width="500" height="200" src="img/oc3.png" alt="Raven Original Document Scanner">
            <p>Raven Original Document Scanner - Huge LCD Touchscreen, Color Two Sided Wireless Scanning Direct to Cloud, Automatic Document Feeder (ADF), Wi-Fi, Ethernet, USB</p>
            <label>Price: 33000/-</label>
            <form action="officeComponents.php" method="post">
              <select name="quantity3" required/>
                 <option value = "blank">Quantity</option>  
                 <option value = "1">1</option>
                 <option value = "2">2</option>
                 <option value = "3">3</option>
                 <option value = "4">4</option>
                 <option value = "5">5</option>
               </select>;
              <button type="submit" name="OC3">Add To Cart</button>
            </form>
            <form action="includes/rateOC.php" method="post">
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
            <img width="500" height="200" src="img/oc4.png" alt="Canon imageCLASS D1620">
              <p>Photocopier - Canon imageCLASS D1620 (2223C024) Multifunction, Wireless Laser Printer with AirPrint, 45 Pages Per Minute and 3 Year Warranty, Amazon Dash Replenishment enabled</p>
              <label>Price: 34999/-</label>
              <form action="officeComponents.php" method="post">
                <select name="quantity4" required/>
                   <option value = "blank">Quantity</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                 </select>;
                <button type="submit" name="OC4">Add To Cart</button>
              </form>
              <form action="includes/rateOC.php" method="post">
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
              <img width="500" height="200" src="img/oc5.png" alt="Brother FAX-2840">
                <p>Fax machine - Brother FAX-2840 High Speed Mono Laser Fax Machine, Dark/light gray - FAX2840</p>
                <label>Price: 17999/-</label>
                <form action="officeComponents.php" method="post">
                  <select name="quantity5" required/>
                     <option value = "blank">Quantity</option>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "5">5</option>
                   </select>;
                  <button type="submit" name="OC5">Add To Cart</button>
                </form>
                  <form action="includes/rateOC.php" method="post">
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
if (isset($_POST['OC1']))
{
  $tot_price = $_POST['quantity1'] * 8999;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','AcerSB220Q','$_POST[quantity1]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  
}
if (isset($_POST['OC2']))
{
  $tot_price = $_POST['quantity2'] * 4443;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','HPOfficeJet3830','$_POST[quantity2]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
  
}
if (isset($_POST['OC3']))
{
  $tot_price = $_POST['quantity3'] * 33000;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','RavenOriginalDocumentScanner','$_POST[quantity3]',$tot_price);";
  $run_query = mysqli_query($conn,$query);

}
if (isset($_POST['OC4']))
{
  $tot_price = $_POST['quantity4'] * 34999;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','CanonD1620','$_POST[quantity4]',$tot_price);";
  $run_query = mysqli_query($conn,$query);
 
}
if (isset($_POST['OC5']))
{
  $tot_price = $_POST['quantity5'] * 17999;
  $query = "INSERT INTO Order_Info(Customer_Id,Product_Name,Quantity,Total_Price) VALUES ('$_SESSION[userID]','BrotherFAX-2840','$_POST[quantity5]',$tot_price);";
  
}
$query = 'INSERT INTO product_officeComponents(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path) VALUES("AcerSB220Q","Office Components","Monitor - Acer SB220Q bi 21.5 inches Full HD (1920 x 1080) IPS Ultra-Thin Zero Frame Monitor (HDMI & VGA port)",8999.00,0,"img/hd1.jpg"),
("HPOfficeJet3830","Office Components","Printer - HP OfficeJet 3830 All-in-One Wireless Printer, HP Instant Ink & Amazon Dash Replenishment Ready (K7V40A)",4443.00,0,"img/hd2.jpg"),
("RavenOriginalDocumentScanner","Office Components","Scanner - Raven Original Document Scanner - Huge LCD Touchscreen, Color Two Sided Wireless Scanning Direct to Cloud, Automatic Document Feeder (ADF), Wi-Fi, Ethernet, USB",33000.00,0,"img/hd3.jpg"),
("CanonD1620","Office Components","Photocopier - Canon imageCLASS D1620 (2223C024) Multifunction, Wireless Laser Printer with AirPrint, 45 Pages Per Minute and 3 Year Warranty, Amazon Dash Replenishment enabled",34999.00,0,"img/hd4.jpg"),
("BrotherFAX-2840","Office Components","Brother FAX-2840 High Speed Mono Laser Fax Machine, Dark/light gray - FAX2840",17999.00,0,"img/hd5.jpg");';
$run_query = mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_officeComponents x1 inner join product_officeComponents x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);
mysqli_close($conn);
 ?>