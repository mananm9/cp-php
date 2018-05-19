<?php

session_start();
$User_Name=$_SESSION['name'];
include('db_config.php');
if(isset($_POST['upload']))
{


$file=$_FILES['data_file']['name'];
$sql = mysql_query("insert into upload(up_file) values ('$file')");
if($sql)
{
$run = move_uploaded_file($_FILES['data_file']['tmp_name'],"./upload/$file");
if($run)
{
echo "uploaded";
echo "<script>alert('Uploaded successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=minister_home.php">';
}
else
{
echo "not uploaded";
echo "<script>alert('Not Uploaded successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=minister_home.php">';
}}
else
{
echo "not inserted";
echo "<script>alert('Not inserted successfully')</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=minister_home.php">';
}
}
?>

