<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
  <div class="map">
   <?php
    include "../php/Database.php";
    include "../php/datafunctions.php";

    $data = new datafunctions();
    $report = "";
    if($_GET){
     $report = $_GET["report"];
    }
    $office = "";
    if($_GET){
     $office = $_GET["office"];
    }
   ?>
   <img src="maps/metromanila/caloocan.png" class="<?php echo $data->getCountByMunicipality("Caloocan",$report,$office);?>" alt="">
   <img src="maps/metromanila/laspinas.png" class="<?php echo $data->getCountByMunicipality("Las Piñas",$report,$office);?>" alt="">
   <img src="maps/metromanila/makati.png" class="<?php echo $data->getCountByMunicipality("Makati",$report,$office);?>" alt="">
   <img src="maps/metromanila/malabon.png" class="<?php echo $data->getCountByMunicipality("Malabon",$report,$office);?>" alt="">
   <img src="maps/metromanila/mandaluyong.png" class="<?php echo $data->getCountByMunicipality("Mandaluyong",$report,$office);?>" alt="">
   <img src="maps/metromanila/manila.png" class="<?php echo $data->getCountByMunicipality("Manila",$report,$office);?>" alt="">
   <img src="maps/metromanila/muntinlupa.png" class="<?php echo $data->getCountByMunicipality("Muntinlupa",$report,$office);?>" alt="">
   <img src="maps/metromanila/navotas.png" class="<?php echo $data->getCountByMunicipality("Navotas",$report,$office);?>" alt="">
   <img src="maps/metromanila/paranaque.png" class="<?php echo $data->getCountByMunicipality("Parañaque",$report,$office);?>" alt="">
   <img src="maps/metromanila/pasay.png" class="<?php echo $data->getCountByMunicipality("Pasay",$report,$office);?>" alt="">
   <img src="maps/metromanila/pasig.png" class="<?php echo $data->getCountByMunicipality("Pasig",$report,$office);?>" alt="">
   <img src="maps/metromanila/pateros.png" class="<?php echo $data->getCountByMunicipality("Pateros",$report,$office);?>" alt="">
   <img src="maps/metromanila/quezoncity.png" class="<?php echo $data->getCountByMunicipality("Quezon City",$report,$office);?>" alt="">
   <img src="maps/metromanila/sanjuan.png" class="<?php echo $data->getCountByMunicipality("San Juan",$report,$office);?>" alt="">
   <img src="maps/metromanila/taguig.png" class="<?php echo $data->getCountByMunicipality("Taguig",$report,$office);?>" alt="">
   <img src="maps/metromanila/valenzuela.png" class="<?php echo $data->getCountByMunicipality("Valenzuela",$report,$office);?>" alt="">
  </div>
 </body>
</html>
