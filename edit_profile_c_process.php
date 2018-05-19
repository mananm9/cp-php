
<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{

$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$c_email=$_POST['c_email'];
$c_pno=$_POST['c_pno'];
$c_address=$_POST['c_address'];
$c_pass=$_POST['c_pass'];


     
$sql = "UPDATE citizen SET c_pno='$c_pno',c_address='$c_address',c_pass='$c_pass' WHERE c_id='$c_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Profile Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=citizen_home.php">';
}
else
{
echo "<script>alert('Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_profile_c.php">';
}
}
?>