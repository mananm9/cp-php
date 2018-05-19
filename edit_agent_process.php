<?php
session_start();
include('db_config.php');

if(isset($_POST['update']))
{
$a_id=$_POST['a_id'];
$a_pass=$_POST['a_pass'];
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_pno=$_POST['a_pno'];
$a_address=$_POST['a_address'];


     
$sql = "UPDATE agent SET a_email='$a_email',a_pno='$a_pno',a_address='$a_address' WHERE a_id='$a_id'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
echo "<script>alert('Record Updated successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=chief_home.php">';
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

$a_id=$_POST['id'];

$sql ="delete from agent where a_id='$a_id'";
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
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit_agent.php">';
}
}
?>


