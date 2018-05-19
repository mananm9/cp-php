<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/contain.css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="menu.js"></script>

<script language="JavaScript" src="javascript/form_validator.js" type="text/javascript"></script>
<style type="text/css">
.style1 {color:#000000;}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
}
#mysubmit { background-color:#6699FF; font-size: 70%; 
color:#FFFFFF;padding:10px;
    font-weight: bold; }

</style>
<script type="text/javascript">

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
</head>

<body>

<div id="main">
<?php include "title.php" ?>

</div>
<?php include "home_menu.php" ?>
<table><tr>
<td width="12"></td>
<td width="517">
					<h2>Welcome To Cybernetics Protector </h2>
					
					
					<p align="justify">In our cybernetics protector system new user can register through an online process. By registering a user agrees to abide by different pre-defined terms and conditions as specified by the system. Any registered user can access the different features of the system authorized to him/her, after he authenticates himself through the login screen. An authenticated user can share their problems in the system so that they might get solved.Authenticated user (citizen) can also be updated through the problem solving process. Once the problem is solved, then the user will be notified through the online system. There are several problems faced by an user (citizen) in problem solving process such as the authority doesn’t respond well to problem or they take too  much of time for it , due to which a common citizen doesn’t get the fortune which is to be given to him/her.  </p>

</td>
 <td width="455" valign="top">
    
<form action="user_Authentication.php" method="post" name="login">
  <table width="431" align="center">
  <tr><td colspan="3" valign="top"><h2> <center>Login here</center></h2></td></tr>
    <tr>
      <td width="124" height="36" align="right"><b>Select user type </b></td>
      <td width="5"><b>:</b></td>
  
      <td>
          <input input type="radio" name="login" id="radio" value="Minister" checked="true"/>
Minister    
      
        <input input type="radio" name="login" id="radio2" value="Agent" />
      Agent
     
        <input  input type="radio" name="login" id="radio4" value="Chief" />
    Chief
      
        <input input type="radio" name="login" id="radio3" value="Citizen" />Citizen
      </td>
    </tr>
    <tr>
      <td width="124" height="37" align="right"><div align="right"><b>User Id</b></div></td>
      <td width="5"><b>:</b></td>
      <td width="266"><input name="txtusername" type="text" id="uname" maxlength="40" />
          <span class="style2">*</span></td>
    </tr>
    <tr>
      <td height="39" align="right"><b>Password</b></td>
      <td><b>:</b></td>
      <td><input name="txtpwd" type="password"  id="pass" maxlength="40"/>
          <span class="style2">*</span></td>
    </tr>
    <tr>
	
      <td colspan="2" align="right"></td>
      <td><input type="submit" id="mysubmit" name="sub"  value="SUBMIT" onclick="return formValidator();"></td>
    </tr>
	<tr>
	
      <td colspan="2" align="right"></td>
      <td><p>New user? <a href="register.php">Register Here</p><a/></td>
    </tr>
  </table>
 
 </form>
</td></tr></table>
<?php include "footer.php" ?>
</div>
</body>

</html>


