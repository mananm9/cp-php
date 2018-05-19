<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];


ob_start();
include_once "db_config.php";

				
					if(isset($_GET['jid'])) {
					$id    = $_GET['jid'];
					header("Content-Disposition: attachment; filename=$id");
					
					}
		 
		 
?>
		
		 