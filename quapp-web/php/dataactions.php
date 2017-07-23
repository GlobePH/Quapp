<?php
 include "Database.php";
 include "datafunctions.php";

 $data = new datafunctions();
 if($_POST){
  $action = $_POST["action"];

  if($action == "feedback"){
   $province = $_POST["province"];
   $municipality = $_POST["municipality"];
   $typeofreport = $_POST["typeofreport"];
   $office = $_POST["office"];
   $comment = $_POST["comment"];

   $data -> addFeedback($province, $municipality, $typeofreport, $office, $comment);
  }

  if($action == "contact"){
   $province = $_POST["province"];
   $municipality = $_POST["municipality"];
   $office = $_POST["office"];
   $con_name = $_POST["con_name"];
   $con_number = $_POST["con_number"];

   $data -> addContact($province, $municipality, $office, $con_name, $con_number);
  }

  if($action == "login"){
   $username = $_POST["username"];
   $password = $_POST["password"];

   $data -> login($username, $password);
  }

 }

 if($_GET){
  $action = $_GET["action"];
  if($action == "logout"){
   session_start();
   $_SESSION["quappuser"] = "";
   $_SESSION["logout"] = "1";
   header("Location:../dashboard.php");
  }
 }
?>
