<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from chief");
while ($row = mysql_fetch_assoc($sql))
{
$ch_id=$row['ch_id'];
$ch_name=$row['ch_name'];
$ch_pass=$row['ch_pass'];

$ch_email=$row['ch_email'];
$ch_pno=$row['ch_pno'];
$ch_address=$row['ch_address'];

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

<?php include "title_minister.php" ?>


</div>
<?php include "minister_menu.php" ?>
<center><table>
  <tr>

<td width="80%">

		<h2>Chief Report </h2>
					<form id="ch_info" name="ch_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table cellpadding="0" cellspacing="0" border="1">
<?php
echo "<tr><th>chief ID</th><th>Name</th><th>Mobile no.</th><th>Email ID</th><th>Address</th></tr>";

include('db_cofig.php');
$result= mysql_query("SELECT * FROM chief");

while($row = mysql_fetch_array($result))
{

echo "<tr><td>". $row['ch_id'] ."</td><td>". $row['ch_name']. "</td><td>". $row['ch_pno']. "</td><td>" . $row['ch_email'] . "</td><td>" . $row['ch_address']. "</td></tr>";
}

?>

</table>
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


