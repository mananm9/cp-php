<?php
session_start();
$User_Name=$_SESSION['name'];
include('db_config.php');


$job_id=$_GET['jid'];



     
$sql = "UPDATE job SET status='1',c_email='$User_Name' WHERE job_id='$job_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Job Applied successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=citizen_home.php">';
}
else
{
echo "<script>alert('Job is not Applied successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_citizen.php">';
}

?>


