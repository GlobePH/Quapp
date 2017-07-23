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
   <img src="maps/philippines/abra.png" class="<?php echo $data->getCountByProvince("Abra",$report,$office);?>">
   <img src="maps/philippines/agusandelsur.png" class="<?php echo $data->getCountByProvince("Agusan Del Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/aklan.png" class="<?php echo $data->getCountByProvince("Aklan",$report,$office);?>" alt="">
   <img src="maps/philippines/albay.png" class="<?php echo $data->getCountByProvince("Albay",$report,$office);?>" alt="">
   <img src="maps/philippines/antique.png" class="<?php echo $data->getCountByProvince("Antique",$report,$office);?>" alt="">
   <img src="maps/philippines/apayao.png" class="<?php echo $data->getCountByProvince("Apayao",$report,$office);?>" alt="">
   <img src="maps/philippines/aurora.png" class="<?php echo $data->getCountByProvince("Aurora",$report,$office);?>" alt="">
   <img src="maps/philippines/basilan.png" class="<?php echo $data->getCountByProvince("Basilan",$report,$office);?><?php echo $data->getCountByProvince("Apayao",$report,$office);?>" alt="">
   <img src="maps/philippines/bataan.png" class="<?php echo $data->getCountByProvince("Bataan",$report,$office);?>" alt="">
   <img src="maps/philippines/batanes.png" class="<?php echo $data->getCountByProvince("Batanes",$report,$office);?>" alt="">
   <img src="maps/philippines/batangas.png" class="<?php echo $data->getCountByProvince("Batangas",$report,$office);?>" alt="">
   <img src="maps/philippines/benguet.png" class="<?php echo $data->getCountByProvince("Benguet",$report,$office);?>" alt="">
   <img src="maps/philippines/biliran.png" class="<?php echo $data->getCountByProvince("Biliran",$report,$office);?>" alt="">
   <img src="maps/philippines/bohol.png" class="<?php echo $data->getCountByProvince("Bohol",$report,$office);?>" alt="">
   <img src="maps/philippines/bukidnon.png" class="<?php echo $data->getCountByProvince("Bukidnon",$report,$office);?>" alt="">
   <img src="maps/philippines/bulacan.png" class="<?php echo $data->getCountByProvince("Bulacan",$report,$office);?>" alt="">
   <img src="maps/philippines/cagayan.png" class="<?php echo $data->getCountByProvince("Cagayan",$report,$office);?>" alt="">
   <img src="maps/philippines/camarinesnorte.png" class="<?php echo $data->getCountByProvince("Camarines Norte",$report,$office);?>" alt="">
   <img src="maps/philippines/camarinessur.png" class="<?php echo $data->getCountByProvince("Camarines Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/capiz.png" class="<?php echo $data->getCountByProvince("Capiz",$report,$office);?>" alt="">
   <img src="maps/philippines/catanduanes.png" class="<?php echo $data->getCountByProvince("Catanduanes",$report,$office);?>" alt="">
   <img src="maps/philippines/cebu.png" class="<?php echo $data->getCountByProvince("Cebu",$report,$office);?>" alt="">
   <img src="maps/philippines/compostellavalley.png" class="<?php echo $data->getCountByProvince("Compostella Valley",$report,$office);?>" alt="">
   <img src="maps/philippines/cotabato.png" class="<?php echo $data->getCountByProvince("Cotabato",$report,$office);?>" alt="">
   <img src="maps/philippines/davao.png" class="<?php echo $data->getCountByProvince("Davao",$report,$office);?>" alt="">
   <img src="maps/philippines/davaodelsur.png" class="<?php echo $data->getCountByProvince("Davao Del Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/davaoori.png" class="<?php echo $data->getCountByProvince("Davao Oriental",$report,$office);?>" alt="">
   <img src="maps/philippines/easternsamar.png" class="<?php echo $data->getCountByProvince("Eastern Samar",$report,$office);?>" alt="">
   <img src="maps/philippines/guimaras.png" class="<?php echo $data->getCountByProvince("Guimaras",$report,$office);?>" alt="">
   <img src="maps/philippines/ifugao.png" class="<?php echo $data->getCountByProvince("Ifugao",$report,$office);?>" alt="">
   <img src="maps/philippines/ilocosnorte.png" class="<?php echo $data->getCountByProvince("Ilocos Norte",$report,$office);?>" alt="">
   <img src="maps/philippines/ilocossur.png" class="<?php echo $data->getCountByProvince("Ilocos Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/iloilo.png" class="<?php echo $data->getCountByProvince("Iloilo",$report,$office);?>" alt="">
   <img src="maps/philippines/isabela.png" class="<?php echo $data->getCountByProvince("Isabela",$report,$office);?>" alt="">
   <img src="maps/philippines/kalinga.png" class="<?php echo $data->getCountByProvince("Kalinga",$report,$office);?>" alt="">
   <img src="maps/philippines/laguna.png" class="<?php echo $data->getCountByProvince("Laguna",$report,$office);?>" alt="">
   <img src="maps/philippines/lanaodelnorte.png" class="<?php echo $data->getCountByProvince("Lanao Del Norte",$report,$office);?>" alt="">
   <img src="maps/philippines/lanaodelsur.png" class="<?php echo $data->getCountByProvince("Lanao Del Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/launion.png" class="<?php echo $data->getCountByProvince("La Union",$report,$office);?>" alt="">
   <img src="maps/philippines/leyte.png" class="<?php echo $data->getCountByProvince("Leyte",$report,$office);?>" alt="">
   <img src="maps/philippines/maguindanao.png" class="<?php echo $data->getCountByProvince("Maguindanao",$report,$office);?>" alt="">
   <img src="maps/philippines/marinduque.png" class="<?php echo $data->getCountByProvince("Marinduque",$report,$office);?>" alt="">
   <img src="maps/philippines/masbate.png" class="<?php echo $data->getCountByProvince("Masbate",$report,$office);?>" alt="">
   <img src="maps/philippines/misamisori.png" class="<?php echo $data->getCountByProvince("Misamis Oriental",$report,$office);?>" alt="">
   <img src="maps/philippines/mtprovince.png" class="<?php echo $data->getCountByProvince("Mountain Province",$report,$office);?>" alt="">
   <img src="maps/philippines/ncr.png" class="<?php echo $data->getCountByProvince("Metro Manila",$report,$office);?>" alt="">
   <img src="maps/philippines/negrosocc.png" class="<?php echo $data->getCountByProvince("Negros Occidental",$report,$office);?>" alt="">
   <img src="maps/philippines/negrosori.png" class="<?php echo $data->getCountByProvince("Negros Oriental",$report,$office);?>" alt="">
   <img src="maps/philippines/northernsamar.png" class="<?php echo $data->getCountByProvince("Northern Samar",$report,$office);?>" alt="">
   <img src="maps/philippines/nuevaecija.png" class="<?php echo $data->getCountByProvince("Nueva Ecija",$report,$office);?>" alt="">
   <img src="maps/philippines/nuevavizcaya.png" class="<?php echo $data->getCountByProvince("Nueva Vizcaya",$report,$office);?>" alt="">
   <img src="maps/philippines/occmindoro.png" class="<?php echo $data->getCountByProvince("Occidental Mindoro",$report,$office);?>" alt="">
   <img src="maps/philippines/orimindoro.png" class="<?php echo $data->getCountByProvince("Oriental Mindoro",$report,$office);?>" alt="">
   <img src="maps/philippines/palawan.png" class="<?php echo $data->getCountByProvince("Palawan",$report,$office);?>" alt="">
   <img src="maps/philippines/pampanga.png" class="<?php echo $data->getCountByProvince("Pampanga",$report,$office);?>" alt="">
   <img src="maps/philippines/pangasinan.png" class="<?php echo $data->getCountByProvince("Pangasinan",$report,$office);?>" alt="">
   <img src="maps/philippines/quezon.png" class="<?php echo $data->getCountByProvince("Quezon",$report,$office);?>" alt="">
   <img src="maps/philippines/quirino.png" class="<?php echo $data->getCountByProvince("Quirino",$report,$office);?>" alt="">
   <img src="maps/philippines/rizal.png" class="<?php echo $data->getCountByProvince("Rizal",$report,$office);?>" alt="">
   <img src="maps/philippines/romblon.png" class="<?php echo $data->getCountByProvince("Romblon",$report,$office);?>" alt="">
   <img src="maps/philippines/samar.png" class="<?php echo $data->getCountByProvince("Samar",$report,$office);?>" alt="">
   <img src="maps/philippines/saranggani.png" class="<?php echo $data->getCountByProvince("Saranggani",$report,$office);?>" alt="">
   <img src="maps/philippines/sorsogon.png" class="<?php echo $data->getCountByProvince("Sorsogon",$report,$office);?>" alt="">
   <img src="maps/philippines/southcotabato.png" class="<?php echo $data->getCountByProvince("South Cotabato",$report,$office);?>" alt="">
   <img src="maps/philippines/southernleyte.png" class="<?php echo $data->getCountByProvince("Southern Leyte",$report,$office);?>" alt="">
   <img src="maps/philippines/sultankudarat.png" class="<?php echo $data->getCountByProvince("Sultan Kudarat",$report,$office);?>" alt="">
   <img src="maps/philippines/sulu.png" class="<?php echo $data->getCountByProvince("Sulu",$report,$office);?>" alt="">
   <img src="maps/philippines/surigaodelnorte.png" class="<?php echo $data->getCountByProvince("Surigao del Norte",$report,$office);?>" alt="">
   <img src="maps/philippines/surigaodelsur.png" class="<?php echo $data->getCountByProvince("Surigao del Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/tarlac.png" class="<?php echo $data->getCountByProvince("Tarlac",$report,$office);?>" alt="">
   <img src="maps/philippines/tawitawi.png" class="<?php echo $data->getCountByProvince("Tawi-Tawi",$report,$office);?>" alt="">
   <img src="maps/philippines/zambales.png" class="<?php echo $data->getCountByProvince("Zambales",$report,$office);?>" alt="">
   <img src="maps/philippines/zamboangadelnorte.png" class="<?php echo $data->getCountByProvince("Zamboanga del Norte",$report,$office);?>" alt="">
   <img src="maps/philippines/zamboangadelsur.png" class="<?php echo $data->getCountByProvince("Zamboanga del Sur",$report,$office);?>" alt="">
   <img src="maps/philippines/zamboangasibugay.png" class="<?php echo $data->getCountByProvince("Zamboanga Sibugay",$report,$office);?>" alt="">
  </div>

 </body>
 <script type="text/javascript">
  function func1() {
   alert("a");
  }
 </script>
</html>
