<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{
$case_id=$_POST['case_id'];
$case_sub=$_POST['case_sub'];
$case_description=$_POST['case_description'];


     
$sql = "UPDATE case_details SET case_sub='$case_sub',case_description='$case_description' WHERE case_id='$case_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Case Record Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=minister_home.php">';
}
else
{
echo "<script>alert('Case Record is not updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_case.php">';
}
}
?>
<?php
include('db_config.php');
if(isset($_POST['delete']))
{

$case_id=$_POST['id'];

$sql ="delete from case_details where case_id='$case_id'";
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


