<?php
class datafunctions{
 private $currentdb;

 function __construct(){
  $db = new Database();
  $this->currentdb = $db;
 }

 function addFeedback($province, $municipality, $typeofreport, $office, $comment){
  session_start();
  $current_date = getCurrentDate();
  $sql = "INSERT INTO tbl_reports (province, municipality, report, office, comment, timestamp) VALUES
  ('".$province."','".$municipality."','".$typeofreport."','".$office."','".$comment."','".$current_date."')";
  $result = $this->currentdb->conn->query($sql);
  $_SESSION["report"] = "1";
  header("Location:../addreport.php");
 }

 function addContact($province, $municipality, $office, $con_name, $con_number){
  session_start();
  $current_date = getCurrentDate();
  $sql = "INSERT INTO tbl_contacts (province, municipality, office, con_name, con_number) VALUES
  ('".$province."','".$municipality."','".$office."','".$con_name."','".$con_number."')";
  $result = $this->currentdb->conn->query($sql);
  $_SESSION["contact"] = "1";
  header("Location:../addcontact.php");
 }

 function login($username, $password){
  session_start();
  $current_date = getCurrentDate();
  $sql = "SELECT * FROM tbl_accounts where username = '".$username."' and password = '".$password."'";
  $result = $this->currentdb->conn->query($sql);
  $row = $result->fetch_array();
  if($row[0] > 0){
   $_SESSION["login"] = "1";
   $_SESSION["quappuser"] = $username;
   header("Location:../dashboard.php");
  }else{
   //wrong username and password
   $_SESSION["login"] = "2";
   $_SESSION["quappuser"] = "";
   header("Location:../login.php");
  }
 }

 function printAllFeedBack(){
  $sql = "SELECT * FROM tbl_reports ORDER BY id DESC";
  $result = $this->currentdb->conn->query($sql);
  echo '
  <table class="table table-hover table-striped" id="datatable-buttons">
  <thead>
  <th>ID</th>
  <th>Province</th>
  <th>Municipality</th>
  <th>Report</th>
  <th>Office</th>
  <th>Comment</th>
  <th>Timestamp</th>
  </thead>
  <tbody>';
  while($row = $result->fetch_array()){
   echo '<tr>
   <td>'.$row["id"].'</td>
   <td>'.$row["province"].'</td>
   <td>'.$row["municipality"].'</td>
   <td>'.$row["report"].'</td>
   <td>'.$row["office"].'</td>
   <td>'.$row["comment"].'</td>
   <td>'.$row["timestamp"].'</td>
   </tr>';
  }
  echo '
  </tbody>
  </table>';
 }

 function printAllContact(){
  $sql = "SELECT * FROM tbl_contacts ORDER BY id DESC";
  $result = $this->currentdb->conn->query($sql);
  echo '
  <table class="table table-hover table-striped" id="datatable-buttons">
  <thead>
  <th>ID</th>
  <th>Province</th>
  <th>Municipality</th>
  <th>Office</th>
  <th>Name</th>
  <th>Number</th>
  <th>Last Notified</th>
  <th>Action</th>
  </thead>
  <tbody>';
  while($row = $result->fetch_array()){
   echo '<tr>
   <td>'.$row["id"].'</td>
   <td>'.$row["province"].'</td>
   <td>'.$row["municipality"].'</td>
   <td>'.$row["office"].'</td>
   <td>'.$row["con_name"].'</td>
   <td>'.$row["con_number"].'</td>
   <td>'.$row["last_notif"].'</td>
   <td><a href="#" class="btn btn-success">Notify</a></td>
   </tr>';
  }
  echo '
  </tbody>
  </table>';
 }

 function getCountByProvince($prov,$report,$office){
  $where1 = "";
  $where2 = "";

  if($report != "All"){
   $where1 = " and report like '%".$report."%'";
  }

  if($office != "All"){
   $where2 = " and office = '".$office."'";
  }

  $sql = "SELECT COUNT(*) FROM tbl_reports WHERE province = '".$prov."' and report like '%+%'".$where1.$where2;
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  $sql = "SELECT COUNT(*) FROM tbl_reports WHERE province = '".$prov."' and report like '%-%'".$where1.$where2;
  $result = $this->currentdb->conn->query($sql);
  $row = $result->fetch_array();
  $neg = $row[0];

  $placestatus = $pos - $neg;
  $value = $this->getPlaceClass($placestatus);

  if((($pos != 0) && ($neg != 0)) && ($placestatus == 0)){
   $value = "neutral";
  }

  return $value;
 }

 function getCountByMunicipality($mun,$report,$office){
  $where1 = "";
  $where2 = "";

  if($report != "All"){
   $where1 = " and report like '%".$report."%'";
  }

  if($office != "All"){
   $where2 = " and office = '".$office."'";
  }

  $sql = "SELECT COUNT(*) FROM tbl_reports WHERE municipality = '".$mun."' and report like '%+%'".$where1.$where2;
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  $sql = "SELECT COUNT(*) FROM tbl_reports WHERE municipality = '".$mun."' and report like '%-%'".$where1.$where2;
  $result = $this->currentdb->conn->query($sql);
  $row = $result->fetch_array();
  $neg = $row[0];

  $placestatus = $pos - $neg;
  $value = $this->getPlaceClass($placestatus);

  if((($pos != 0) && ($neg != 0)) && ($placestatus == 0)){
   $value = "neutral";
  }

  return $value;
 }

 function getNegativeCount(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%-%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $neg = $row2[0];

  return $neg;
 }

 function getPositiveCount(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%+%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getPositiveCountApril(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%+%' and timestamp like '4%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getNegativeCountApril(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%-%' and timestamp like '4%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getPositiveCountMay(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%+%' and timestamp like '5%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getNegativeCountMay(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%-%' and timestamp like '5%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getPositiveCountJune(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%+%' and timestamp like '6%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getNegativeCountJune(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%-%' and timestamp like '6%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getPositiveCountJuly(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%+%' and timestamp like '7%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getNegativeCountJuly(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%-%' and timestamp like '7%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getPositiveCountAugust(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%+%' and timestamp like '8%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getNegativeCountAugust(){
  $count = 0;
  $sql = "SELECT COUNT(*) FROM tbl_reports where report like '%-%' and timestamp like '8%'";
  $result = $this->currentdb->conn->query($sql);
  $row2 = $result->fetch_array();
  $pos = $row2[0];

  return $pos;
 }

 function getPlaceClass($count){
  if($count == 0){
   return "default";
  }elseif(($count > 0) && ($count <= 10)){
   return "low";
  }
  if($count < 0){
   return "caution";
  }
 }


}
?>
