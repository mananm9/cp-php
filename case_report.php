<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from case_details");
while ($row = mysql_fetch_assoc($sql))
{
$case_id=$row['case_id'];
$case_sub=$row['case_sub'];
$case_description=$row['case_description'];

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

		<h2>Case Details </h2>
					<form id="case_info" name="case_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table cellpadding="0" cellspacing="0" border="1">
<?php
echo "<tr><th>Case ID</th><th>Case Subject</th><th>Case Description</th></tr>";

include('db_cofig.php');
$result= mysql_query("SELECT * FROM case_details");

while($row = mysql_fetch_array($result))
{

echo "<tr><td>". $row['case_id'] ."</td><td>". $row['case_sub']. "</td><td>". $row['case_description']. "</td></tr>";
}

?>

</table>
</form>

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


