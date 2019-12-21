<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <fieldset>
      <img width="500" height="200" src="img/pw1.jpg" alt="pw1.jpg">
        <p>Gigabyte PW400 400W 80 Plus White Certified PSU</p>
        <label>Price: Tk 2,800</label>
        <form action="includes/ratePS.php" method="post">
          <select name="quantity1" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="PS1">Add To Cart</button>
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
        <img width="500" height="200" src="img/pw2.jpg" alt="pw2.jpg">
          <p>Thermaltake PS-LTP-0550NPCNEU-2 Litepower 550W Non Modular Power Supply</p>
          <label>Price: Tk 3,500</label>
          <form action="includes/ratePS.php" method="post">
            <select name="quantity2" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="PS2">Add To Cart</button>
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
          <img width="500" height="200" src="img/pw3.jpg" alt="pw3.jpg">
            <p>Cooler Master MWE 650 650W FULLY MODULAR 80 Plus Gold Certified PSU #MPY-6501-AFAAG-UK</p>
            <label>Price: Tk 7,500</label>
            <form action="includes/ratePS.php" method="post">
              <select name="quantity3" required/>
                 <option value = "blank">Quantity</option>
                 <option value = "1">1</option>
                 <option value = "2">2</option>
                 <option value = "3">3</option>
                 <option value = "4">4</option>
                 <option value = "5">5</option>
               </select>;
              <button type="submit" name="PS3">Add To Cart</button>
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
            <img width="500" height="200" src="img/pw4.jpg" alt="pw4.jpg">
              <p>Thermaltake Toughpower GF1 ARGB 650W 80 Plus Gold Fully Modular Power Supply #PS-TPD-0650F3FAGE-1</p>
              <label>Price: Tk 10,700</label>
              <form action="includes/ratePS.php" method="post">
                <select name="quantity4" required/>
                   <option value = "blank">Quantity</option>
                   <option value = "1">1</option>
                   <option value = "2">2</option>
                   <option value = "3">3</option>
                   <option value = "4">4</option>
                   <option value = "5">5</option>
                 </select>;
                <button type="submit" name="PS4">Add To Cart</button>
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
              <img width="500" height="200" src="img/pw5.jpg" alt="pw5.jpg">
                <p>Corsair HX1200i ATX 1200 Watt 80 Plus Platinum Certified Full Modular Power Supply Unit (PSU) #CP-9020070-UK</p>
                <label>Price:Tk 24,500</label>
                <form action="includes/ratePS.php" method="post">
                  <select name="quantity5" required/>
                     <option value = "blank">Quantity</option>
                     <option value = "1">1</option>
                     <option value = "2">2</option>
                     <option value = "3">3</option>
                     <option value = "4">4</option>
                     <option value = "5">5</option>
                   </select>;
                  <button type="submit" name="PS5">Add To Cart</button>
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
$query = 'INSERT INTO product_PowerSupply(product_Name,category_Name,product_Description,product_Price,product_Review,product_IMG_path) VALUES("Gigabyte400W","Hardware Components","Gigabyte PW400 400W 80 Plus White Certified PSU",2800.00,0,"img/pw1.jpg"),
("Thermaltake550W","Hardware Components","Thermaltake PS-LTP-0550NPCNEU-2 Litepower 550W Non Modular Power Supply",3500.00,0,"img/pw2.jpg"),
("CoolerMaster650W","Hardware Components","Cooler Master MWE 650 650W FULLY MODULAR 80 Plus Gold Certified PSU",7500.00,0,"img/pw3.jpg"),
("Thermaltake650W","Hardware Components","Thermaltake Toughpower GF1 ARGB 650W 80 Plus Gold Fully Modular Power Supply",10700.00,0,"img/pw4.jpg"),
("Corsair1200W","Hardware Components","Corsair HX1200i ATX 1200 Watt 80 Plus Platinum Certified Full Modular Power Supply Unit",24500.00,0,"img/pw5.jpg");';
$run_query = mysqli_query($conn,$query);
$query2 = "DELETE x1 from product_PowerSupply x1 inner join product_PowerSupply x2 where x1.product_ID>x2.product_ID and x1.product_Name = x2.product_Name";
$run_query2=mysqli_query($conn,$query2);
mysqli_close($conn);
 ?>
