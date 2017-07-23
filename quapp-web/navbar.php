<nav class="navbar navbar-default navbar-fixed">
 <div class="container-fluid">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="#">
    <?php
     if($curr_page == "dashboard.php"){
      echo "Dashboard";
     }elseif($curr_page == "addreport.php"){
      echo "Feedback";
     }elseif($curr_page == "results.php"){
      echo "Results";
     }elseif($curr_page == "maps.php"){
      echo "Maps";
     }elseif($curr_page == "addcontact.php"){
      echo "Contacts";
     }

     if(isset($_SESSION["quappuser"])){
      if($_SESSION["quappuser"]!= ""){
       echo " - Welcome: ".$_SESSION["quappuser"];
      }
     }
    ?>
   </a>
  </div>
  <div class="collapse navbar-collapse">
   <ul class="nav navbar-nav navbar-left">
   </ul>


   <ul class="nav navbar-nav navbar-right">
    <!--
    <li>
     <a href="">
      Account
     </a>
    </li>
    <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      Dropdown
      <b class="caret"></b>
     </a>
     <ul class="dropdown-menu">
      <li><a href="#">Action</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something</a></li>
      <li><a href="#">Another action</a></li>
      <li><a href="#">Something</a></li>
      <li class="divider"></li>
      <li><a href="#">Separated link</a></li>
     </ul>
    </li>
    -->
    <?php
     if(isset($_SESSION["quappuser"])){
      if($_SESSION["quappuser"]!= ""){
      echo '
      <li>
       <a href="php/dataactions.php?action=logout">
        Log out
       </a>
      </li>';
      }
     }
    ?>
   </ul>

  </div>
 </div>
</nav>
