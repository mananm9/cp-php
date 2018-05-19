
<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{

$a_id=$_POST['a_id'];
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_pno=$_POST['a_pno'];
$a_address=$_POST['a_address'];
$a_pass=$_POST['a_pass'];


     
$sql = "UPDATE agent SET a_pno='$a_pno',a_address='$a_address',a_pass='$a_pass' WHERE a_id='$a_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Profile Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=agent_home.php">';
}
else
{
echo "<script>alert('Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_profile_a.php">';
}
}
?>