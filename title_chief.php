<html>
    <head>
 
    </head>
    <body >

        <div id="title1">
		
		<div id="img"><img src="images/logo.png"  /></div>
		<?php 
		include('db_cofig.php');
   		 $query = mysql_query("SELECT * from chief where ch_email='$User_Name'");
		 while($row = mysql_fetch_array($query))
						   {
						   $ch_name=$row['ch_name'];
						 
						   
						   ?>
	<p align="right" style="color:#33ADFF; font-size: 26px">welcome  <br><font color="#FFFFFF" size="34px"><?php echo "$ch_name";?></font></p>
		<?php } ?>
		
    </body>
</html>
