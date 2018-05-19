<?php
include('db_config.php');


if(isset($_POST['submit']))
{
$chat_to=$_POST['chat_to'];
$chat_from=$_POST['chat_from'];;
$chat_msg=$_POST['chat_msg'];

  if((strlen ( $chat_msg ))<1) {
 echo "<script>alert('enter message')</script>";
 echo '<script>window.location="chatting_citizen.php"</script>';
 }
 else  {

$sql="INSERT INTO chatting(chat_from, chat_to,chat_msg)VALUES ('$chat_from','$chat_to','$chat_msg')";
$result=mysql_query($sql);

echo "<script>alert('Your chat Submitted successfully')</script>";
echo '<script>window.location="chatting_citizen.php"</script>';
}
}

?>

