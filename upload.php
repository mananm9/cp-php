<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/contain.css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
</head>

<body>
<div id="main">

<?php include "title_minister.php" ?>


</div>
<?php include "minister_menu.php" ?>
<center><table><tr>
<td width="12"></td>
<td width="517">
					<h2>Upload Evidence </h2>
					
					
					<form method="post" action="upload_process.php"  enctype="multipart/form-data">
Choose a file to upload:<br><br><input id="file" type="file" name="data_file"   /><br>
<br>
<input type="submit" name="upload" value="Upload" />
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


