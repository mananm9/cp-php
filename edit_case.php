<?php
header("Pragma: no-cache");
header("Cache: no-cahce");
session_start();
$User_Name=$_SESSION['name'];

ob_start();
include_once "db_config.php";
$MSG = null;
$MSG = $_SESSION['MSG'];

$sql = mysql_query("select * from case_details");
while ($row = mysql_fetch_assoc($sql))
{
$case_id=$row['case_id'];
$case_sub=$row['case_sub'];
$case_description=$row['case_description'];


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
           
</script>

</head>

<body>
<div id="main">

<?php include "title_minister.php" ?>


</div>
<?php include "minister_menu.php" ?>
<center><table width="90%">
<tr><td><h2>Manage Case</h2></td></tr>
  <tr>

<td>

<table border="0" cellspacing="10" align="center">
							  
							  <tr>
								<td align="left">Enter Case ID </td>
								<td>
								<form action="" method="post"> 
								  <select id="case_id" name="case_id">
    								<option>--Select ID--</option>
									<?php include('db_cofig.php');
   									 $query = mysql_query("SELECT * from case_details");
										while($row = mysql_fetch_array($query)){?>
										<option>
										<?php echo $row['case_id'];
										$caseid = $row['case_id'];
										
										
										?></option>
										
										<?php }
										?>
									</select>
								  <input name="submit" type="submit" id="submit2" value="    Search   " />
								</form>
								 </td>
								 <td><form action="edit_case_process.php" method="post"> 
								  <input type="hidden" name="id" value="<?php echo "$caseid";?>"/> 
								 <input name="delete" type="submit" id="submit3" value="    Delete   " />
								 </form>
								 </td>
							  </tr>
							  </table>
							  </td></tr>
							  <tr><td>
							  <fieldset><legend>Edit Information</legend>
					
					<?php
						   if($_POST['case_id']!="")
						   {
						   $case_id= $_POST['case_id'];
						   $result= mysql_query("SELECT * FROM case_details WHERE case_id='$case_id'");
						   while($row = mysql_fetch_array($result))
						   {
						   $id=$row['case_id'];
						   ?>
					
					
					<form action="edit_case_process.php" method="post" name="updatechief" onsubmit='return formValidator();'>
					<table border="0" align="center" bgcolor="#FFFFFF">
						
						 <tr><td colspan="2"> <span class="style2">* Means this only would be updated </span>               
              <input type="hidden" name="case_id" value="<?php echo "$id";?>"/>                         
             </td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p>Case ID : </p></td>
							<td><?php echo'<input type="text" readonly name="case_id" size="25" id="case_id" value="'.$row['case_id'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td></tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Case Sub : </p></td>
							<td><?php echo'<input type="text" onKeyUp="CheckForAlphabets(this)" name="case_sub" size="25" id="case_sub" value="'.$row['case_sub'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;" ';?></td>
						</tr>
						<tr onmouseover="ChangeBackgroundColor(this)" onmouseout="RestoreBackgroundColor(this)" style="border: thin solid black">
							<td height="49"><p><span class="style2">*</span>Case Description : </p></td>
							<td>
							<?php echo'<input type="text" name="case_description" id="case_description" maxlength="40"  size="25" value="'.$row['case_description'].'" style="color: #000000; font-family: Verdana; font-weight: bold; font-size: 12px;"';?></td>
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