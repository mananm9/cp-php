<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{
$c_id=$_POST['c_id'];
$c_name=$_POST['c_name'];
$c_pass=$_POST['c_pass'];

$c_email=$_POST['c_email'];
$c_pno=$_POST['c_pno'];
$c_address=$_POST['c_address'];


     
$sql = "UPDATE citizen SET c_email='$c_email',c_pno='$c_pno',c_address='$c_address' WHERE c_id='$c_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Record Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=agent_home.php">';
}
else
{
echo "<script>alert('Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_citizen.php">';
}
}
?>
<?php
include('db_config.php');
if(isset($_POST['delete']))
{

$c_id=$_POST['id'];

$sql ="delete from citizen where c_id='$c_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;

if($res==1)
{
echo "<script>alert('Record Deleted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=agent_home.php">';
}
else
{
echo "<script>alert('Record is not Deleted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_citizen.php">';
}
}
?>


