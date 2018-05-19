<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from agent");
while ($row = mysql_fetch_assoc($sql))
{
$a_id=$row['a_id'];
$a_name=$row['a_name'];
$a_pass=$row['a_pass'];

$a_email=$row['a_email'];
$a_pno=$row['a_pno'];
$a_address=$row['a_address'];

}


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

<?php include "title_chief.php" ?>


</div>
<?php include "chief_menu.php" ?>
<center><table>
  <tr>

<td width="80%">

		<h2>Agent Report </h2>
					<form id="a_info" name="a_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table cellpadding="0" cellspacing="0" border="1">
<?php
echo "<tr><th>Agent ID</th><th>Name</th><th>Mobile no.</th><th>Email ID</th><th>Address</th></tr>";

include('db_cofig.php');
$result= mysql_query("SELECT * FROM agent");

while($row = mysql_fetch_array($result))
{

echo "<tr><td>". $row['a_id'] ."</td><td>". $row['a_name']. "</td><td>". $row['a_pno']. "</td><td>" . $row['a_email'] . "</td><td>" . $row['a_address']. "</td></tr>";
}

?>

</table>
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


