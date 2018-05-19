<?php
include('db_config.php');


if(isset($_POST['register']))
{
$ch_id=$_POST['ch_id'];
$ch_pass=$_POST['ch_pass'];
$ch_name=$_POST['ch_name'];
$ch_email=$_POST['ch_email'];
$ch_pno=$_POST['ch_pno'];
$ch_address=$_POST['ch_address'];

 
if((strlen ( $ch_name ))<1) {
 echo "<script>alert('enter name')</script>";
 echo '<script>window.location="add_chief.php"</script>';
 }
 else if((strlen ( $ch_email ))<1){
 echo "<script>alert('enter email')</script>";
 echo '<script>window.location="add_chief.php"</script>';
 }
 else if ((strlen ( $ch_pno ))<1) {
 echo "<script>alert('enter phone no')</script>";
 echo '<script>window.location="add_chief.php"</script>';
 }
 else if((strlen ( $ch_address ))<1){
 echo "<script>alert('enter address')</script>";
 echo '<script>window.location="add_chief.php"</script>';
 }
 else if( ((strlen ($ch_pass))<1)){
 echo "<script>alert('enter password')</script>";
 echo '<script>window.location="add_chief.php"</script>';
 }
 else  {


$sql="INSERT INTO chief(ch_id,ch_pass, ch_name, ch_email, ch_pno, ch_address)VALUES ('$ch_id','$ch_pass','$ch_name','$ch_email','$ch_pno','$ch_address')";
$result=mysql_query($sql);

echo "<script>alert('Chief Registered successfully')</script>";
echo '<script>window.location="minister_home.php"</script>';

}
}
?>

