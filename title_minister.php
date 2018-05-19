<html>
    <head>
 
    </head>
    <body >

        <div id="title1">
		
		<div id="img"><a href="minister_home.php"><img src="images/logo.png"  /></a></div>
		<?php 
		include('db_cofig.php');
   		 $query = mysql_query("SELECT * from minister where m_email='$User_Name'");
		 while($row = mysql_fetch_array($query))
						   {
						   $m_name=$row['m_name'];
						 
						   
						   ?>
	<p align="right" style="color:#33ADFF; font-size: 26px">welcome  <br><font color="#FFFFFF" size="34px"><?php echo "$m_name";?></font> </p>
		<?php } ?>
		
    </body>
</html>
