<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from faq");
while ($row = mysql_fetch_assoc($sql))
{
$faq_id=$row['faq_id'];
$faq_from=$row['faq_from'];
$faq_to=$row['faq_to'];
$faq_sub=$row['faq_sub'];
$faq_msg=$row['faq_msg'];

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/contain.css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript" src="javascript/calendar.js"></script>
<script type="text/JavaScript" src="scw.js"></script>
<script type="text/javascript" src="javascript/validation.js"></script>
<style type="text/css">
.style2 {color: #FF0000}
</style>
<script type="text/javascript">

			function contact(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');

                }
            }
			function digit(i)
            {
                if(i.value.length>0)
                {
                    i.value = i.value.replace(/[^\d]+/g, '');
					return true;

                }
				else{
                    alert("only numeric ");
                    return false;
                }
            }
            function CheckForAlphabets(elem)
            {
                var alphaExp = /^[a-z A-Z]+$/;
                if(elem.value.match(alphaExp)){
                    return true;
                }else{
                    alert("give alphabatic name ");
                    return false;
                }
            }
            function mob()
            {
                var rl=document.getElementById("pno").value;
                if(rl.toString().length<10||rl.toString().length>10)
                {
                    alert("Contact No. should be of ten digits");
                    return false;
                }

            }
			
</script>
<script type="text/javascript">
            function valid() {
                //alert('calling');
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                // var address = document.forms[form_id].elements[txtemail_id].value;
                var address = document.getElementById('email').value;
                if(reg.test(address) == false) {
                    alert('Invalid Email Address');
                    return false;
                }
            }
        </script>
</head>

<body>
<div id="main">

<?php include "title_citizen.php" ?>


</div>
<?php include "citizen_menu.php" ?>
<center><table width="50%">
  <tr>

<td>

		<h2>Read Messages</h2>
		
		<form id="faq_info" name="faq_info" method="POST" action=" <?php echo $_SERVER['PHP_SELF']; ?>" >
					<table cellpadding="0" cellspacing="0" border="1">
<?php
echo "<tr><th>FAQ ID</th><th>From</th><th>Subject</th><th>Message</th><th>Reply</th></tr>";

include('db_cofig.php');
if($_SESSION['name']!="")
{
$User_Name=$_SESSION['name'];
$result= mysql_query("SELECT * FROM faq where faq_to='$User_Name'");

while($row = mysql_fetch_array($result))
{

echo "<tr><td>". $row['faq_id'] ."</td><td>". $row['faq_from']. "</td><td>". $row['faq_sub']. "</td><td>" . $row['faq_msg'] . "</td><td><a href='faq_citizen.php'>Give Reply</a></td></tr>";
}
}
else
{
echo "<script>alert('No any Notification')</script>";

}
?>

</table>
</form>
		

</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


