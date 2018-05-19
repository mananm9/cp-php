<?php

ob_start();

include('db_config.php');
session_start();

$Usertype = $_POST['login'];
$User_Name = $_POST['txtusername'];
$Password = $_POST['txtpwd'];


if ($Usertype == "Minister") 
{

    $result = mysql_query("select * from minister where m_email='$User_Name' and m_pass='$Password'");

    if ($row == mysql_fetch_array($result)) {
	

        header("location:index.php");
    } else  {
        $_SESSION['name'] = $User_Name;
        header("location:minister_home.php");
    }
	
}
 
if ($Usertype=="Chief") 
{

    $result = mysql_query("select * from chief where ch_email='$User_Name' and ch_pass='$Password'");

    if ($row == mysql_fetch_array($result)) {

        header("location:index.php");
    } else {
        $_SESSION['name'] = $User_Name;
        header("location:chief_home.php");
    }
}
if ($Usertype=="Agent") 
{

    $result = mysql_query("select * from agent where a_email='$User_Name' and a_pass='$Password'");

    if ($row == mysql_fetch_array($result)) {

        header("location:index.php");
    } else {
        $_SESSION['name'] = $User_Name;
        header("location:agent_home.php");
    }
}
if ($Usertype == "Citizen") 
{

    $result = mysql_query("select * from citizen where c_email='$User_Name' and c_pass='$Password'");

    if ($row == mysql_fetch_array($result)) {

        header("location:index.php");
    } else {
        $_SESSION['name'] = $User_Name;
        header("location:citizen_home.php");
    }
}
else 
{

   echo '<script>alert("Wrong Username or Password")</script>'; 
   echo '<script>window.location="index.php"</script>';
}

?>