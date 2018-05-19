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
<center><table><td width="67"><tr>
<td width="12"></td>
<td width="517">
					<h2>Download Uploaded Case Details </h2>
					

<form action="" method="post"> 

<table cellpadding="0" cellspacing="0" border="1">
		<?php
echo "<tr><th>Upload ID</th><th>File Name</th><th>Download</th></tr>";						
									 include('db_cofig.php');
   									 $query = mysql_query("SELECT * from upload");
										while($row = mysql_fetch_array($query))
										{
										$id=$row['up_id'];
										$filename=$row['up_file'];
echo "<tr><td>". $row['up_id'] ."</td><td>" . $row['up_file'] . "</td><td><a href='download.php?jid=".$row['up_file'] ."'>Download Case</a></td></tr>";
										}
										?>
										
						 
						   
						
						 
</table>
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


