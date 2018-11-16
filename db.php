
<?php
session_start();
//cepumu pievienojam - tādā veidā varamidentificēt lietotāju - sessija (lai varam redzēt jebkurā lapā, ka cilvēks ir piereģistrējis)
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "lesson8";
//ieejas nosacījumi datu bāze pieslēgšanai SQL
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 ?>
 