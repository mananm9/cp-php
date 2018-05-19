<?php
include('db_config.php');


if(isset($_POST['register']))
{
$c_id=$_POST['c_id'];
$c_pass=$_POST['c_pass'];
$c_name=$_POST['c_name'];
$c_email=$_POST['c_email'];
$c_pno=$_POST['c_pno'];
$c_address=$_POST['c_address'];

 
 if((strlen ( $c_name ))<1) {
 echo "<script>alert('enter name')</script>";
 echo '<script>window.location="register.php"</script>';
 }
 else if((strlen ( $c_email ))<1){
 echo "<script>alert('enter email')</script>";
 echo '<script>window.location="register.php"</script>';
 }
 else if ((strlen ( $c_pno ))<1) {
 echo "<script>alert('enter phone no')</script>";
 echo '<script>window.location="register.php"</script>';
 }
 else if((strlen ( $c_address ))<1){
 echo "<script>alert('enter address')</script>";
 echo '<script>window.location="register.php"</script>';
 }
 else if( ((strlen ($c_pass))<1)){
 echo "<script>alert('enter password')</script>";
 echo '<script>window.location="register.php"</script>';
 }
 else  {
 $sql="INSERT INTO citizen(c_id,c_pass, c_name, c_email, c_pno, c_address)VALUES ('$c_id','$c_pass','$c_name','$c_email','$c_pno','$c_address')";
$result=mysql_query($sql);

echo "<script>alert('Citizen Registered successfully')</script>";
echo '<script>window.location="index.php"</script>';
 }
 
}

?>

