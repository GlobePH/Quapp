<?php
include 'db.inc.php';
session_start();

$province = $_GET["province"];
$municipality = $_GET["municipality"];
$report = $_GET["report"];
$office = $_GET["office"];
$comment = $_GET["comment"];

$flag['code']=0;

$sql = "INSERT INTO tbl_reports (province, municipality, report, office, comment, timestamp) VALUES ('".
$_GET["province"]."','".$_GET["municipality"]."','".$_GET["report"]."','".$_GET["office"]."','".
$_GET["comment"]."','".$current_date."')";
$result = $conn->query($sql);
$conn->close();

print(json_encode($flag));
?>
