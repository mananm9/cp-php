<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{
$ch_id=$_POST['ch_id'];
$ch_name=$_POST['ch_name'];
$ch_pass=$_POST['ch_pass'];

$ch_email=$_POST['ch_email'];
$ch_pno=$_POST['ch_pno'];
$ch_address=$_POST['ch_address'];


     
$sql = "UPDATE chief SET ch_email='$ch_email',ch_pno='$ch_pno',ch_address='$ch_address' WHERE ch_id='$ch_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Record Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=minister_home.php">';
}
else
{
echo "<script>alert('Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_chief.php">';
}
}
?>
<?php
include('db_config.php');
if(isset($_POST['delete']))
{

$ch_id=$_POST['id'];

$sql ="delete from chief where ch_id='$ch_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;

if($res==1)
{
echo "<script>alert('Record Deleted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=minister_home.php">';
}
else
{
echo "<script>alert('Record is not Deleted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_chief.php">';
}
}
?>


