		<?php




		define('DB_NAME','w1530819_0');
		define('DB_USER', 'w1530819');
		define('DB_PASSWORD', 'Tvr60rEymLqV');
		define('DB_HOST', 'elephant.ecs.westminster.ac.uk');

		$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);


		if(!$link){
			
			die ('could not connect'. mysql_error());
			
			
		}

		$db_selected = mysql_select_db(DB_NAME, $link);

		if(!$db_selected){
			
			die('Can\'t use'. DB_NAME . ':' . mysql_error());
			
		}


		$value = $_POST['feedback_topic'];
		$value1 = $_POST['feedback_comment'];
		$value3 = $_POST['createDate'];
		
			if (empty($value) or empty($value1))
		{
			echo "<p>Please ensure all mandatory fields are filled in!";
		}else{
			
			$sql = "INSERT INTO feedback VALUES ('$value','$value1','$value3')";
			$exeadddeptSQL=mysql_query($sql);
			
			
		}
		echo "<p>Succesfully connected!";

		mysql_close();
