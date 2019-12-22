<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <img width="500" height="200" src="img/hd1.jpg" alt="hd1.jpg">
        <p>Toshiba 500GB 2.5 Inch SATA 5400RPM Notebook HDD #MQ01ABD050/MQ01ABF050M/HDWK105UZSVA</p>
        <label>Price: Tk 3,500</label>
        <form action="includes/rateHDD.php" method="post">
          <select name="quantity1" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="HDD1">Add To Cart</button>
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
          <form action="includes/rateHDD.php" method="post">
            <select name="quantity2" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="HDD2">Add To Cart</button>
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
            <form action="includes/rateHDD.php" method="post">
              <select name="quantity3" required/>
                 <option value = "blank">Quantity</option>
                 <option value = "1">1</option>
                 <option value = "2">2</option>
                 <option value = "3">3</option>
                 <option value = "4">4</option>
                 <option value = "5">5</option>
               </select>;
              <button type="submit" name="HDD3">Add To Cart</button>
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
              <form action="includes/rateHDD.php" method="post">
                <select name="quantity4" required/>
                   <option value = "blank">Quantity</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                 </select>;
                <button type="submit" name="HDD4">Add To Cart</button>
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
                <form action="includes/rateHDD.php" method="post">
                  <select name="quantity5" required/>
                     <option value = "blank">Quantity</option>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "5">5</option>
                   </select>;
                  <button type="submit" name="HDD5">Add To Cart</button>
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
  </body>
</html>
<?php
include "includes/dbh.inc.php";
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
