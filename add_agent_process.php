<?php
include('db_config.php');


if(isset($_POST['register']))
{
$a_id=$_POST['a_id'];
$a_pass=$_POST['a_pass'];
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_pno=$_POST['a_pno'];
$a_address=$_POST['a_address'];

 if((strlen ( $a_pass ))<1) {
 echo "<script>alert('enter password')</script>";
 echo '<script>window.location="add_agent.php"</script>';
 }
 else if((strlen ( $a_name ))<1){
 echo "<script>alert('enter name')</script>";
 echo '<script>window.location="add_agent.php"</script>';
 }
 else if ((strlen ( $a_email ))<1) {
 echo "<script>alert('enter email')</script>";
 echo '<script>window.location="add_agent.php"</script>';
 }
 else if((strlen ( $a_pno ))<1){
 echo "<script>alert('enter phone no')</script>";
 echo '<script>window.location="add_agent.php"</script>';
 }
 else if( ((strlen ($a_address))<1)){
 echo "<script>alert('enter address')</script>";
 echo '<script>window.location="add_agent.php"</script>';
 }
 else  {
 

$sql="INSERT INTO agent(a_id,a_pass, a_name, a_email, a_pno, a_address)VALUES ('$a_id','$a_pass','$a_name','$a_email','$a_pno','$a_address')";
$result=mysql_query($sql);

echo "<script>alert('Agent Registered successfully')</script>";
echo '<script>window.location="minister_home.php"</script>';
}
}

?>

