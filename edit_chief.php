<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from chief");
while ($row = mysql_fetch_assoc($sql))
{
$ch_id=$row['ch_id'];
$ch_name=$row['ch_name'];
$ch_pass=$row['ch_pass'];

$ch_email=$row['ch_email'];
$ch_pno=$row['ch_pno'];
$ch_address=$row['ch_address'];

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

<?php include "title_minister.php" ?>


</div>
<?php include "minister_menu.php" ?>
<center><table width="90%">
<tr><td><h2>Manage Chief</h2></td></tr>
  <tr>

<td>

<table border="0" cellspacing="10" align="center">
							  
							  <tr>
								<td align="left">Enter Chief ID </td>
								<td>
								<form action="" method="post"> 
								  <select id="ch_id" name="ch_id">
    								<option>--Select ID--</option>
									<?php include('db_cofig.php');
   									 $query = mysql_query("SELECT * from chief");
										while($row = mysql_fetch_array($query)){?>
										<option>
										<?php echo $row['ch_id'];
										$chid = $row['ch_id'];
										
										
										?></option>
										
										<?php }
										?>
									</select>
								  <input name="submit" type="submit" id="submit2" value="    Search   " />
								</form>
								 </td>
								 <td><form action="edit_chief_process.php" method="post"> 
								  <input type="hidden" name="id" value="<?php echo "$chid";?>"/> 
								 <input name="delete" type="submit" id="submit3" value="    Delete   " />
								 </form>
								 </td>
							  </tr>
							  </table>
							  </td></tr>
							  <tr><td>
							  <fieldset><legend>Edit Information</legend>
					
					<?php
						   if($_POST['ch_id']!="")
						   {
						   $ch_id= $_POST['ch_id'];
						   $result= mysql_query("SELECT * FROM chief WHERE ch_id='$ch_id'");
						   while($row = mysql_fetch_array($result))
						   {
						   $id=$row['ch_id'];
						   ?>
					
					
					<form action="edit_chief_process.php" method="post" name="updatechief" onsubmit='return formValidator();'>
					<table border="0" align="center" bgcolor="#FFFFFF">
						
						 <tr><td colspan="2"> <span class="style2">* Means this only would be updated </span>               
              <input type="hidden" name="ch_id" value="<?php echo "$id";?>"/>                         
             </td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Chief ID : </p></td>
							<td><?php echo'<input type="text" readonly name="r_id" size="25" id="r_id" value="'.$row['ch_id'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Full Name : </p></td>
							<td><?php echo'<input type="text" readonly onKeyUp="CheckForAlphabets(this)" name="ch_name" size="25" id="r_type" value="'.$row['ch_name'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Email ID : </p></td>
							<td>
							<?php echo'<input type="text" name="ch_email" id="ch_email" maxlength="40"  size="25" value="'.$row['ch_email'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Contact no. : </p></td>
							<td>
							<?php echo'<input type="text" name="ch_pno" id="ch_pno" maxlength="40" onKeyUp="digit(this)" onKeyUp="contact(this)" onBlur="mob()"  size="25" value="'.$row['ch_pno'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Address : </p></td>
							<td>
							<?php echo'<input type="text" name="ch_address" id="ch_address" maxlength="40" size="25" value="'.$row['ch_address'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
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