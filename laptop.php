<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <img width="500" height="200" src="img/laptop1.jpg" alt="laptop1.jpg">
    <p>Acer Spin 3 Convertible Laptop, 14 inches Full HD IPS Touch, 8th Gen Intel Core i7-8565U, 16GB DDR4, 512GB PCIe NVMe SSD, Backlit KB, Fingerprint Reader, Rechargeable Active Stylus, SP314-53N-77AJ </p>
    <label>Price: Tk 56,720</label>
    <br>
    <img width="500" height="200" src="img/laptop2.jpg" alt="laptop2.jpg">
    <p>Lenovo Flex 14 2-in-1 Convertible Laptop, 14 Inch FHD Touchscreen Display, AMD Ryzen 5 3500U Processor, 12GB DDR4 RAM, 256GB NVMe SSD, Windows 10, 81SS000DUS, Black, Pen Included </p>
    <label>Price:Tk 40,160</label>
    <br>
    <img width="500" height="200" src="img/laptop3.jpg" alt="laptop3.jpg">
    <p>Acer Predator Helios 300 Gaming Laptop PC, 15.6 inches Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4, 256GB PCIe NVMe SSD, Backlit Keyboard, PH315-52-78VL</p>
    <label>Price: Tk 85,760</label>
    <br>
    <img width="500" height="200" src="img/laptop4.jpg" alt="laptop4.jpg">
    <p>ASUS Chromebook C425 Clamshell Laptop, 14" FHD 4-Way NanoEdge, Intel Core M3-8100Y Processor, 8GB RAM, 64GB eMMC Storage, Backlit KB, Silver, Chrome OS, C425TA-DH384</p>
    <label>Price:Tk 26,320</label>
    <br>
    <img width="500" height="200" src="img/laptop5.jpg" alt="laptop5.jpg">
    <p>MSI P65 Creator-1084 15.6" 4K UHD Display, Ultra-Thin and Light, RTX Studio Laptop, Intel Core i7-9750H, GeForce RTX 2060, 32GB DDR4, 1TB Teton Glacier SSD, Win10PRO, VR Ready</p>
    <label>Price:Tk 143,520</label>
    <br>
  </body>
  </html>
  <?php
  include "includes/dbh.inc.php";
  $query = 'INSERT INTO laptop(name,category,description,price,rating,img_path) VALUES("Acer Spin 3 Convertible Laptop","Personal","14 inches Full HD IPS Touch, 8th Gen Intel Core i7-8565U, 16GB DDR4, 512GB PCIe NVMe SSD, Backlit KB, Fingerprint Reader, Rechargeable Active Stylus, SP314-53N-77AJ",56700.000,0,"img/laptop1.jpg"),
  ("Lenovo Flex 14 2-in-1 Convertible Laptop","personal","14 Inch FHD Touchscreen Display, AMD Ryzen 5 3500U Processor, 12GB DDR4 RAM, 256GB NVMe SSD, Windows 10, 81SS000DUS, Black, Pen Included",40160.000,0,"img/laptop2.jpg"),
  ("Acer Predator Helios 300 Gaming Laptop PC","Gaming","15.6 inches Full HD 144Hz 3ms IPS Display, Intel i7-9750H, GTX 1660 Ti 6GB, 16GB DDR4, 256GB PCIe NVMe SSD, Backlit Keyboard, PH315-52-78VL",85760.000,0,"img/laptop3.jpg"),
  ("ASUS Chromebook C425 Clamshell Laptop","Personal","14","FHD 4-Way NanoEdge, Intel Core M3-8100Y Processor, 8GB RAM, 64GB eMMC Storage, Backlit KB, Silver, Chrome OS, C425TA-DH384",26320.000,0,"img/laptop4.jpg"),
  ("MSI P65 Creator-1084","personal","15.6 INCH 4K UHD Display, Ultra-Thin and Light, RTX Studio Laptop, Intel Core i7-9750H, GeForce RTX 2060, 32GB DDR4, 1TB Teton Glacier SSD, Win10PRO, VR Ready",143520.000,0,"img/laptop5");';
  $run_query=mysqli_query($conn,$query);
  $query2="DELETE X1 from laptop x1 inner join laptop x2 where x1.id>x2.id and x1.id=x2.id";
  $run_query2=mysqli_query($conn,$query2);
  mysqli_close($conn);
  ?>
