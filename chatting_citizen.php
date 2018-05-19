<?php
error_reporting(0);
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";

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
<td><fieldset><legend>View Messages</legend>
<?php
include('db_cofig.php');
if($_SESSION['name']!="")
{
$User_Name=$_SESSION['name'];
$result= mysql_query("SELECT * FROM chatting where chat_to='$User_Name'");

while($row = mysql_fetch_array($result))
{

?>
<table><tr><td><p><?php echo $row['chat_from']?> </p></td>
<td><?php echo'<input type="text" readonly name="c_address" id="c_address" maxlength="40" size="25" value="'.$row['chat_msg'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
</tr></table><?php }} ?></fieldset></td>
<td>
<fieldset><legend>Send Messages</legend>
		<h2>Online Chatting </h2>
					<form action="chatting_citizen_process.php" method="post" name="login" onsubmit='return formValidator();'>
					<table width="451">
						
						
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td height="61"><p><span class="style2">*</span>From ID : </p></td>
							<td><input name="chat_from" readonly type="text" id="chat_from" maxlength="40" value="<?php echo $User_Name ?>"/></td>
						</tr>
					
						
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>To ID   :</td>
	<td>
	<select id="chat_to" name="chat_to">
    								
									<?php include('db_cofig.php');
   									 $query = mysql_query("SELECT * from agent");
										while($row = mysql_fetch_array($query)){?>
										<option>
										<?php echo $row['a_email'];
										$cemail = $row['a_email'];
										
										
										?></option>
										
										<?php }
										?>
				</select>
	</td>
</tr>



<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49"><span class="style2">*</span>Message   :</td>
	<td><textarea name="chat_msg"  cols="10" rows="15"></textarea></td>
</tr>

<tr>
	<td colspan=2 align=center><input type="submit" name="submit" value="Submit" >
	
</tr>
					</table>
				</form></fieldset>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


