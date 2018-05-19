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

<script language="JavaScript" src="javascript/form_validator.js" type="text/javascript"></script>
<style type="text/css">
.style2 {color: #FF0000}
#mysubmit { background-color:#6699FF; font-size: 70%; 
color:#FFFFFF;padding:10px;
    font-weight: bold; }

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
                var rl=document.getElementById("c_pno").value;
                if(rl.toString().length==10)
                {
                    alert("Contact No. should be of ten digits");
                    return false;
                }

            }
			function emailValidator(elem){
if(elem.value.length == 0){
return true;
}
else if(elem.value.length!=0){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert("Please enter valid email ID");
		elem.focus();
		return false;
	}}
}
function lengthRestrictionpassword(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " Letters in Password Field");
		elem.focus();
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
			function formValidator(){
				return valid();
			}
        </script>
</head>

<body>
<div id="main">

<?php include "title.php" ?>


</div>
<?php include "home_menu.php" ?>
<center><table width="50%">
  <tr>

<td>

		<h2>Register </h2>
					<form action="add_user_process.php" method="post" name="login" onclick=formValidator(); >
					<table width="451">
						<?php
                              include_once "db_config.php";
                              $result = mysql_query("select * from citizen order by (c_id)desc limit 1");
                               while ($row = mysql_fetch_array($result)) {
                                      $num = $row['c_id'];
                                      $n = (int) $num;
									  $c_id = $n + 1;
                                      }
                         ?>
						 <tr><td colspan="2"><p><span class="style2">* Means All Fields are Mandatory</span></p></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td width="161" height="49"><p>Citizen ID : </p></td>
							<td width="278"><input name="c_id" type="text" id="c_id" maxlength="40" readonly value="<?php echo $c_id ?>" /> </td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
						  <td height="61"><p><span class="style2">*</span>Password : </p></td>
							<td><input name="c_pass" type="password" id="c_pass" maxlength="40" onKeyUp="lengthRestrictionpassword(this, 6, 10)"/></td>
						</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="38"><span class="style2">*</span>Full Name   :</td>
	<td><input type=text name="c_name" onKeyUp="CheckForAlphabets(this)" ></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="44"><span class="style2">*</span>Email ID   :</td>
	<td><input type="text" name="c_email" onKeyUp="emailValidator(this)" ></td>
</tr>

<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="40"><span class="style2">*</span>Contact No   :</td>
	<td><input type="text" name="c_pno" onKeyUp="contact(this)"  ></td>
</tr>
<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
	<td height="49"><span class="style2">*</span>Address   :</td>
	<td><textarea name="c_address" ></textarea></td>
</tr>

<tr>
	<td align=center colspan="2"><input type="submit" id="mysubmit" name="register" value="Register" onclick="return formValidator();" >
	
	
</tr>
					</table>
				</form>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>


