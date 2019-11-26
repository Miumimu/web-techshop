<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "loginsystem";

$conn = mysqli_connect ($dbservername,$dbusername,$dbpassword,$dbname);

if (!$conn)
{
  die ("Connection Failed:". mysqli_connect_error());
}

 ?>
