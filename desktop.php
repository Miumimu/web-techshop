<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <img width="500" height="200" src="img/dtop1.jpg" alt="dtop1.jpg">
      <p>Acer Aspire TC-885-UA91 Desktop, 9th Gen Intel Core i3-9100, 8GB DDR4, 512GB SSD, 8X DVD, 802.11AC Wifi, USB 3.1 Type C, Windows 10 Home</p>
      <label>Price:Tk 33,520</label>
      <br>
      <img width="500" height="200" src="img/dtop2.jpg" alt="dtop2.jpg">
      <p>Dell Inspiron 3470 Desktop, 2 Year Onsite Warranty, Windows 10 Pro, 9th Gen Intel Core i5-9400 6-Core 4.1GHz Proc w/Intel Turbo Boost Technology, 12GB DDR4 2666MHz RAM, 1TB HDD+128Gb SATA SSD, DVD RW</p>
      <label>Price:Tk 54,320</label>
      <br>
      <img width="500" height="200" src="img/dtop3.jpg" alt="dtop3.jpg">
      <p>HP 4NN56AA#ABA Pavilion 24-Inch All-in-One Computer, Intel Core i5-9400T, 12 GB RAM, 512 GB Solid State Drive, Windows 10 (24-Xa0032, Black)</p>
      <label>Price:Tk 79,920</label>
      <br>
      <img width="500" height="200" src="img/dtop4.jpg" alt="dtop4.jpg">
      <p>CYBERPOWERPC Gamer Xtreme VR Gaming PC, Intel Core i5-9400F 2.9GHz, NVIDIA GeForce GTX 1660 6GB, 8GB DDR4, 240GB SSD, 1TB HDD, WiFi Ready & Win 10 Home (GXiVR8060A8, Black)</p>
      <label>Price:Tk 103,920</label>
      <br>
      <img width="500" height="200" src="img/dtop5.jpg" alt="dtop5.jpg">
      <p>iBUYPOWER Gaming PC Computer Desktop Element 9260 (Intel Core i7-9700F 3.0Ghz, NVIDIA GeForce GTX 1660 Ti 6GB, 16GB DDR4, 240GB SSD, 1TB HDD, WiFi & Windows 10 Home) Black</p>
      <label>Price:Tk 79,920</label>
      <br>
    </body>
    </html>
    <?php
    include "includes/dbh.inc.php";
    $query = 'INSERT INTO desktop(name,description,price,rating,img_path) VALUES("Acer Aspire TC-885-UA91 Desktop","9th Gen Intel Core i3-9100, 8GB DDR4, 512GB SSD, 8X DVD, 802.11AC Wifi, USB 3.1 Type C, Windows 10 Home",33520.00,0,"img/dtop1.jpg"),
    ("Dell Inspiron 3470 Desktop","2 Year Onsite Warranty, Windows 10 Pro, 9th Gen Intel Core i5-9400 6-Core 4.1GHz Proc w/Intel Turbo Boost Technology, 12GB DDR4 2666MHz RAM, 1TB HDD+128Gb SATA SSD, DVD RW",54320.00,0,"img/dtop2.jpg"),
    ("HP 4NN56AAABA Pavilion","24-Inch All-in-One Computer Intel Core i5-9400T, 12 GB RAM, 512 GB Solid State Drive, Windows 10 (24-Xa0032, Black)",79920.00,0,"img/dtop3.jpg"),
    ("CYBERPOWERPC Gamer Xtreme VR Gaming PC",,"14","Intel Core i5-9400F 2.9GHz, NVIDIA GeForce GTX 1660 6GB, 8GB DDR4, 240GB SSD, 1TB HDD, WiFi Ready & Win 10 Home (GXiVR8060A8, Black)",103920.00,0,"img/dtop4.jpg"),
    ("iBUYPOWER Gaming PC Computer Desktop","Element 9260 (Intel Core i7-9700F 3.0Ghz, NVIDIA GeForce GTX 1660 Ti 6GB, 16GB DDR4, 240GB SSD, 1TB HDD, WiFi & Windows 10 Home) Black",79920.00,0,"img/dtop5");';
    $run_query=mysqli_query($conn,$query);
    $query2="DELETE X1 from laptop x1 inner join laptop x2 where x1.id>x2.id and x1.id=x2.id";
    $run_query2=mysqli_query($conn,$query2);
    mysqli_close($conn);
    ?>
