<?php
	include 'php/db.inc.php';

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

	$user = $_GET['user'];
	$sessioncode = $_GET['sessioncode'];
	$question = $_GET['question'];
	$answer = $_GET['answer'];
	$answer2 = $_GET['answer2'];
	$answer3 = $_GET['answer3'];
	$answer4 = $_GET['answer4'];
	$answer5 = $_GET['answer5'];
	$schoolyear = $_GET['schoolyear'];
	$semester = $_GET['semester'];

	//start of date
	date_default_timezone_set('Asia/Manila');

	$info = getdate();
	$currdate = $info['mday'];
	$currmonth = $info['mon'];
	$curryear = $info['year'];

	$currhour = $info['hours'];
	$currmin = $info['minutes'];
	$currsec = $info['seconds'];

	$time_in_12_hour_format  = date("g:i a", strtotime($currhour.":".$currmin));
	$currhourmin = $currmonth."-".$currdate."-".$curryear." ".$time_in_12_hour_format;
	//end of date

	$flag['code']=0;

	//$result = mysql_query("select count(*) from tbl_answers where username = '".$user."' and sessioncode = '".$sessioncode."' and question='".$question."'");
	//$row = mysql_fetch_array($result);

	//if($row[0]==0){
	$sessioncode = str_replace('_', ' ', $sessioncode);
		$result2 = mysql_query("insert into tbl_answers (username, teachername, question, answer, answercode, schoolyear, semester, timestamp) values('".
		$user."','".$sessioncode."','".$question."','".$answer."','".$user.$sessioncode."','".$schoolyear."','".$semester."','".$currhourmin."') ",$con);

		$result2 = mysql_query("insert into tbl_answers (username, teachername, question, answer, answercode, schoolyear, semester, timestamp) values('".
		$user."','".$sessioncode."','".($question + 1)."','".$answer2."','".$user.$sessioncode."','".$schoolyear."','".$semester."','".$currhourmin."') ",$con);

		$result2 = mysql_query("insert into tbl_answers (username, teachername, question, answer, answercode, schoolyear, semester, timestamp) values('".
		$user."','".$sessioncode."','".($question + 2)."','".$answer3."','".$user.$sessioncode."','".$schoolyear."','".$semester."','".$currhourmin."') ",$con);

		$result2 = mysql_query("insert into tbl_answers (username, teachername, question, answer, answercode, schoolyear, semester, timestamp) values('".
		$user."','".$sessioncode."','".($question + 3)."','".$answer4."','".$user.$sessioncode."','".$schoolyear."','".$semester."','".$currhourmin."') ",$con);

		$result2 = mysql_query("insert into tbl_answers (username, teachername, question, answer, answercode, schoolyear, semester, timestamp) values('".
		$user."','".$sessioncode."','".($question + 4)."','".$answer5."','".$user.$sessioncode."','".$schoolyear."','".$semester."','".$currhourmin."') ",$con);

	//}

	print(json_encode($flag));
	mysql_close($con);
?>
