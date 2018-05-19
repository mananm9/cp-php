<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from citizen");
while ($row = mysql_fetch_assoc($sql))
{
$c_id=$row['c_id'];
$c_name=$row['c_name'];
$c_pass=$row['c_pass'];

$c_email=$row['c_email'];
$c_pno=$row['c_pno'];
$c_address=$row['c_address'];

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

<?php include "title_agent.php" ?>


</div>
<?php include "agent_menu.php" ?>
<center><table width="90%">
<tr><td><h2>Manage Citizen</h2></td></tr>
  <tr>

<td>

<table border="0" cellspacing="10" align="center">
							  
							  <tr>
								<td align="left">Enter Citizen ID </td>
								<td>
								<form action="" method="post"> 
								  <select id="c_id" name="c_id">
    								<option>--Select ID--</option>
									<?php include('db_cofig.php');
   									 $query = mysql_query("SELECT * from citizen");
										while($row = mysql_fetch_array($query)){?>
										<option>
										<?php echo $row['c_id'];
										$cid = $row['c_id'];
										
										
										?></option>
										
										<?php }
										?>
									</select>
								  <input name="submit" type="submit" id="submit2" value="    Search   " />
								</form>
								 </td>
								 <td><form action="edit_citizen_process.php" method="post"> 
								  <input type="hidden" name="id" value="<?php echo "$cid";?>"/> 
								 <input name="delete" type="submit" id="submit3" value="    Delete   " />
								 </form>
								 </td>
							  </tr>
							  </table>
							  </td></tr>
							  <tr><td>
							  <fieldset><legend>Edit Information</legend>
					
					<?php
						   if($_POST['c_id']!="")
						   {
						   $c_id= $_POST['c_id'];
						   $result= mysql_query("SELECT * FROM citizen WHERE c_id='$c_id'");
						   while($row = mysql_fetch_array($result))
						   {
						   $id=$row['c_id'];
						   ?>
					
					
					<form action="edit_citizen_process.php" method="post" name="updatechief" onsubmit='return formValidator();'>
					<table border="0" align="center" bgcolor="#FFFFFF">
						
						 <tr><td colspan="2"> <span class="style2">* Means this only would be updated </span>               
              <input type="hidden" name="c_id" value="<?php echo "$id";?>"/>                         
             </td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Citizen ID : </p></td>
							<td><?php echo'<input type="text" readonly name="c_id" size="25" id="c_id" value="'.$row['c_id'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Full Name : </p></td>
							<td><?php echo'<input type="text" readonly onKeyUp="CheckForAlphabets(this)" name="c_name" size="25" id="r_type" value="'.$row['c_name'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Email ID : </p></td>
							<td>
							<?php echo'<input type="text" name="c_email" id="ch_email" maxlength="40"  size="25" value="'.$row['c_email'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Contact no. : </p></td>
							<td>
							<?php echo'<input type="text" name="c_pno" id="c_pno" maxlength="40" onKeyUp="digit(this)" onKeyUp="contact(this)" onBlur="mob()"  size="25" value="'.$row['c_pno'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Address : </p></td>
							<td>
							<?php echo'<input type="text" name="c_address" id="c_address" maxlength="40" size="25" value="'.$row['c_address'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						

						
						
						<tr>
      <td height="49" align="center" colspan="2"><input id="myupdate"  type="submit" name="update" value="Update"  /></td> 
	  
    </tr>
  
</table>
				</form></fieldset><?php }} ?>
</td></tr></table></center>
<?php include "footer.php" ?>
</div>
</body>

</html>