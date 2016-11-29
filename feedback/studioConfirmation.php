<?php 

mysql_connect('elephant.ecs.westminster.ac.uk','w1530819','Tvr60rEymLqV');


mysql_select_db('w1530819_0');



$sql = "SELECT * FROM studio";

$records  = mysql_query($sql);




?>


<html>


<head>
<title>Studio Confirmation</title>
</head>

<body>


<h1>Studio confirmation</h1>


<?php

 $x = 0;

while($studio= mysql_fetch_assoc($records)){
		$x++;
	echo"<hr> <br>$x) ".$studio['studio_name']. "  <br> ".$studio['studio_address']. "   " .$studio['studio_post_code']." <br>  ".$studio['studio_telNo']."<br> <br> ";
	

}


?>








</body>

</html>