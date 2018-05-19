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

#stud
{
float:left;
margin-left:30px;
}
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
<table align="center"><tr>

<td width="517">
					<h2>Contact us </h2>
					
					
					<p align="justify">Corporate Office:<br><br> Cybernetics Protector<br />
<br />
+91 9876543210<br />
Email: cp@gmail.com </p>

</td>
</tr></table>
<?php include "footer.php" ?>
</div>
</body>

</html>


