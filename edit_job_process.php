<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{

$job_id=$_POST['job_id'];
$job_title=$_POST['job_title'];
$job_specification=$_POST['job_specification'];
$job_salary=$_POST['job_salary'];
$job_location=$_POST['job_location'];
$job_address=$_POST['job_address'];


     
$sql = "UPDATE job SET job_location='$job_location',job_salary='$job_salary',job_address='$job_address' WHERE job_id='$job_id'";
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
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_agent.php">';
}
}
?>
<?php
include('db_config.php');
if(isset($_POST['delete']))
{

$job_id=$_POST['id'];

$sql ="delete from job where job_id='$job_id'";
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
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_job.php">';
}
}
?>


