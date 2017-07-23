<?php
	class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    function __construct(){
        $this->db_connect();
    }

    private function db_connect(){
      $this->servername = 'localhost';
      $this->username = 'root1';
      $this->password = '';
      $this->dbname = 'db_report1';

      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return $this->conn;
    }

    function getBDUsername(){
       return $this->username;
    }

	}

 function getCurrentDate(){
		date_default_timezone_set("Asia/Manila");
		$info = getdate();
		$date = $info['mday'];
		$month = $info['mon'];
		$year = $info['year'];
		$hour = $info['hours'];
		$min = $info['minutes'];
		$sec = $info['seconds'];
		$current_date = "$month/$date/$year : $hour:$min";
		return $current_date;
	}
?>
