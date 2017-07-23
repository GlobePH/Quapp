<div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

 <!--
 Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
 Tip 2: you can also add an image using data-image tag
-->
<?php

	if($curr_page == "dashboard.php"){$dashboard = 'active';}
	if($curr_page == "addreport.php"){$addreport = 'active';}
	if($curr_page == "results.php"){$results = 'active';}
	if($curr_page == "maps.php"){$maps = 'active';}
	if($curr_page == "contacts.php"){$contacts = 'active';}
	if($curr_page == "addcontact.php"){$addcontacts = 'active';}
	if($curr_page == "login.php"){$loginpage = 'active';}

?>
<div class="sidebar-wrapper">
 <div class="logo">
  <a href="#" class="simple-text">
   Quapp
  </a>
 </div>

 <ul class="nav">
  <li class="<?php echo $dashboard;?>">
   <a href="dashboard.php">
    <i class="pe-7s-display2"></i>
    <p>Dashboard</p>
   </a>
  </li>
   <li class="<?php echo $addreport;?>">
   <a href="addreport.php">
    <i class="pe-7s-speaker"></i>
    <p>Add Feedback</p>
   </a>
  </li>
   <li class="<?php echo $addcontacts;?>">
			<?php
				if(isset($_SESSION["quappuser"])){
					if($_SESSION["quappuser"]!= ""){
					echo '
		   <a href="addcontact.php">
		    <i class="pe-7s-user"></i>
		    <p>Add Contact</p>
		   </a>';
					}
				}
			?>
  </li>
   <li class="<?php echo $results;?>">
   <a href="results.php">
    <i class="pe-7s-server"></i>
    <p>Show Results</p>
   </a>
  </li>
   <li class="<?php echo $contacts;?>">
			<?php
				if(isset($_SESSION["quappuser"])){
					if($_SESSION["quappuser"]!= ""){
					echo '
		   <a href="contacts.php">
		    <i class="pe-7s-server"></i>
		    <p>Show Contacts</p>
		   </a>';
					}
				}
			?>
  </li>
   <li class="<?php echo $maps;?>">
   <a href="maps.php">
    <i class="pe-7s-global"></i>
    <p>Show Maps</p>
   </a>
  </li>
   <li class="<?php echo $loginpage;?>">
			<?php
				if(!isset($_SESSION["quappuser"]) || empty($_SESSION["quappuser"])){
					echo '
		   <a href="login.php">
		    <i class="pe-7s-lock"></i>
		    <p>Login</p>
		   </a>';
				}
			?>
  </li>
 </ul>
</div>
</div>
