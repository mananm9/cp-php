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
<table><tr>
<td width="12"></td>
<td width="517">
					<h2>Welcome To The Minstry </h2>
					
					
					<p align="justify">This module should contain all the necessary tools with the help of which the Ministry of defense will be able to send resources and assign the cases to a Secret Agency in a very secret and effective environment. It should provide quick feedbacks to the Defense Ministry during investigations of complex cases. This module will be interconnected with both Chief's module as well as UnderCover Agent's module and provides a centralized control to the Ministry.</p>

</td></tr></table>
<?php include "footer.php" ?>
</div>
</body>

</html>


