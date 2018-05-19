<html>
    <head>
 
    </head>
    <body >

        <div id="title1">
		
		<div id="img"><img src="images/logo.png"  /></div>
		<?php 
		include('db_cofig.php');
   		 $query = mysql_query("SELECT * from agent where a_email='$User_Name'");
		 while($row = mysql_fetch_array($query))
						   {
						   $a_name=$row['a_name'];
						 
						   
						   ?>
	<p align="right" style="color:#33ADFF; font-size: 26px">welcome  <br><font color="#FFFFFF" size="34px"><?php echo "$a_name";?></font></p>
		<?php } ?>
		
    </body>
</html>
