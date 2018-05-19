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
<?php include "title_agent.php" ?>
</div>
<?php include "agent_menu.php" ?>

<center><table><tr>
<td width="12"></td>
<td width="517">
					<h2>Welcome To Agent's Department </h2>
					
					
					<p align="justify">In our cybernetics protector system new user can register through an online process. By registering a user agrees to abide by different pre-defined terms and conditions as specified by the system. Any registered user can access the different features of the system authorized to him/her, after he authenticates himself through the login screen. An authenticated user can share their problems in the system so that they might get solved.Authenticated user (citizen) can also be updated through the problem solving process. Once the problem is solved, then the user will be notified through the online system. There are several problems faced by an user (citizen) in problem solving process such as the authority doesn’t respond well to problem or they take too  much of time for it , due to which a common citizen doesn’t get the fortune which is to be given to him/her.  </p>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


