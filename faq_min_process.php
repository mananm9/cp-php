<?php
include('db_config.php');


if(isset($_POST['submit']))
{
$faq_id=$_POST['faq_id'];
$faq_from=$_POST['faq_from'];
$faq_to=$_POST['faq_to'];
$faq_sub=$_POST['faq_sub'];
$faq_msg=$_POST['faq_msg'];

if((strlen ( $faq_sub ))<1){
 echo "<script>alert('enter subject')</script>";
 echo '<script>window.location="faq_min.php"</script>';
 }
 else if ((strlen ( $faq_msg ))<1) {
 echo "<script>alert('enter message')</script>";
 echo '<script>window.location="faq_min.php"</script>';
 }
  else  {

$sql="INSERT INTO faq(faq_id,faq_from, faq_to, faq_sub, faq_msg)VALUES ('$faq_id','$faq_from','$faq_to','$faq_sub','$faq_msg')";
$result=mysql_query($sql);

echo "<script>alert('Your Message Sent successfully')</script>";
echo '<script>window.location="minister_home.php"</script>';

}
}
?>

