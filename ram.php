<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div>
<fieldset>
<img width="500" height="200" src="img/ram2gb.jpg" alt="ram2.jpg">
  <p>Patriot Signature Line 2GB DDR3 1600MHz Desktop RAM #PSD34G160081</p>
  <label>Price:Tk 1,350</label>
  <form action="includes/rateRAM.php" method="post">
    <select name="quantity1" required/>
       <option value = "blank">Quantity</option>
       <option value = "1">1</option>
       <option value = "2">2</option>
       <option value = "3">3</option>
       <option value = "4">4</option>
       <option value = "5">5</option>
     </select>;
    <button type="submit" name="ram1">Add To Cart</button>
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
<form action="includes/rateRAM.php" method="post">
  <select name="quantity2" required/>
     <option value = "blank">Quantity</option>
     <option value = "1">1</option>
     <option value = "2">2</option>
     <option value = "3">3</option>
     <option value = "4">4</option>
     <option value = "5">5</option>
   </select>;
  <button type="submit" name="ram2">Add To Cart</button>
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
    <form action="includes/rateRAM.php" method="post">
      <select name="quantity3" required/>
         <option value = "blank">Quantity</option>
         <option value = "1">1</option>
         <option value = "2">2</option>
         <option value = "3">3</option>
         <option value = "4">4</option>
         <option value = "5">5</option>
       </select>;
      <button type="submit" name="ram3">Add To Cart</button>
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
        <form action="includes/rateRAM.php" method="post">
          <select name="quantity4" required/>
             <option value = "blank">Quantity</option>
             <option value = "1">1</option>
             <option value = "2">2</option>
             <option value = "3">3</option>
             <option value = "4">4</option>
             <option value = "5">5</option>
           </select>;
          <button type="submit" name="ram4">Add To Cart</button>
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
          <form action="includes/rateRAM.php" method="post">
            <select class="binputbox" name="quantity5" required/>
               <option value = "blank">Quantity</option>
               <option value = "1">1</option>
               <option value = "2">2</option>
               <option value = "3">3</option>
               <option value = "4">4</option>
               <option value = "5">5</option>
             </select>;
            <button type="submit" name="ram5">Add To Cart</button>
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
    if (isset($_POST['rat1']))
    {
      $ratings = $_POST['review1'];
      $query = "INSERT INTO hardware_review(product_NAME,product_Rating) VALUES ('RAM2GBpatriot','$ratings');";
      $run_query = mysqli_query($conn,$query);
      $query = "SELECT avg(product_Rating) FROM hardware_review where product_NAME='RAM2GBpatriot' ;";
      $run_query = mysqli_query($conn,$query);
      while ($row = mysqli_fetch_assoc($run_query))
      {
        $rating = $row['avg(product_Rating)'];
      }
        $query = "UPDATE product_ram SET product_Review='$rating' where product_Name='RAM2GBpatriot';";
        $run_query = mysqli_query($conn,$query);

}?>
