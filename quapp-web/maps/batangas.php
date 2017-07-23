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
   <img src="maps/batangas/agoncillo.png" class="<?php echo $data->getCountByMunicipality("Agoncillo",$report,$office);?>" alt="">
   <img src="maps/batangas/alitagtag.png" class="<?php echo $data->getCountByMunicipality("Alitagtag",$report,$office);?>" alt="">
   <img src="maps/batangas/balayan.png" class="<?php echo $data->getCountByMunicipality("Balayan",$report,$office);?>" alt="">
   <img src="maps/batangas/batangascity.png" class="<?php echo $data->getCountByMunicipality("Batangas City",$report,$office);?>" alt="">
   <img src="maps/batangas/bauan.png" class="<?php echo $data->getCountByMunicipality("Bauan",$report,$office);?>" alt="">
   <img src="maps/batangas/calaca.png" class="<?php echo $data->getCountByMunicipality("Calaca",$report,$office);?>" alt="">
   <img src="maps/batangas/calatagan.png" class="<?php echo $data->getCountByMunicipality("Calatagan",$report,$office);?>" alt="">
   <img src="maps/batangas/cuenca.png" class="<?php echo $data->getCountByMunicipality("Cuenca",$report,$office);?>" alt="">
   <img src="maps/batangas/ibaan.png" class="<?php echo $data->getCountByMunicipality("Ibaan",$report,$office);?>" alt="">
   <img src="maps/batangas/laurel.png" class="<?php echo $data->getCountByMunicipality("Laurel",$report,$office);?>" alt="">
   <img src="maps/batangas/lemery.png" class="<?php echo $data->getCountByMunicipality("Lemery",$report,$office);?>" alt="">
   <img src="maps/batangas/lian.png" class="<?php echo $data->getCountByMunicipality("Lian",$report,$office);?>" alt="">
   <img src="maps/batangas/lipa.png" class="<?php echo $data->getCountByMunicipality("Lipa City",$report,$office);?>" alt="">
   <img src="maps/batangas/lobo.png" class="<?php echo $data->getCountByMunicipality("Lobo",$report,$office);?>" alt="">
   <img src="maps/batangas/mabini.png" class="<?php echo $data->getCountByMunicipality("Mabini",$report,$office);?>" alt="">
   <img src="maps/batangas/malvar.png" class="<?php echo $data->getCountByMunicipality("Malvar",$report,$office);?>" alt="">
   <img src="maps/batangas/mataasnakahoy.png" class="<?php echo $data->getCountByMunicipality("Mataas Na Kahoy",$report,$office);?>" alt="">
   <img src="maps/batangas/nasugbu.png" class="<?php echo $data->getCountByMunicipality("Nasugbu",$report,$office);?>" alt="">
   <img src="maps/batangas/padregarcia.png" class="<?php echo $data->getCountByMunicipality("Padre Garcia",$report,$office);?>" alt="">
   <img src="maps/batangas/rosario.png" class="<?php echo $data->getCountByMunicipality("Rosario",$report,$office);?>" alt="">
   <img src="maps/batangas/sanjose.png" class="<?php echo $data->getCountByMunicipality("San Jose",$report,$office);?>" alt="">
   <img src="maps/batangas/sanjuan.png" class="<?php echo $data->getCountByMunicipality("San Juan",$report,$office);?>" alt="">
   <img src="maps/batangas/sannicolas.png" class="<?php echo $data->getCountByMunicipality("San Nicolas",$report,$office);?>" alt="">
   <img src="maps/batangas/sanluis.png" class="<?php echo $data->getCountByMunicipality("San Luis",$report,$office);?>" alt="">
   <img src="maps/batangas/sanpascual.png" class="<?php echo $data->getCountByMunicipality("San Pascual",$report,$office);?>" alt="">
   <img src="maps/batangas/stateresita.png" class="<?php echo $data->getCountByMunicipality("Santa Teresita",$report,$office);?>" alt="">
   <img src="maps/batangas/stotomas.png" class="<?php echo $data->getCountByMunicipality("Santo Tomas",$report,$office);?>" alt="">
   <img src="maps/batangas/taal.png" class="<?php echo $data->getCountByMunicipality("Taal",$report,$office);?>" alt="">
   <img src="maps/batangas/tanauan.png" class="<?php echo $data->getCountByMunicipality("Tanauan City",$report,$office);?>" alt="">
   <img src="maps/batangas/talisay.png" class="<?php echo $data->getCountByMunicipality("Talisay",$report,$office);?>" alt="">
   <img src="maps/batangas/taysan.png" class="<?php echo $data->getCountByMunicipality("Taysan",$report,$office);?>" alt="">
   <img src="maps/batangas/tingloy.png" class="<?php echo $data->getCountByMunicipality("Tingloy",$report,$office);?>" alt="">
   <img src="maps/batangas/tuy.png" class="<?php echo $data->getCountByMunicipality("Tuy",$report,$office);?>" alt="">
  </div>
 </body>
</html>
