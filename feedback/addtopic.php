<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <title>Feedback</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
</body>
<div class="container">
    <div class="row" id="login-container">
        <div class="span8 offset2">

            <div class="jumbotron">
                <h1>Topic</h1>
                <p></p>

            </div>

            <form  action ="" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Create Topic</label>
                    <input type="text" class="form-control" name="feedback_topic" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Enter comment about topic</label>


                    <textarea class="form-control" name="feedback_comment" rows="10"></textarea>
                    <button type="submit" class="btn btn-default">Post</button>
					
					<a href="index.php" class="button">
					<button type="button" class="btn btn-default">Show topics</button>
					</a>
					<form  action ="" method="link">  
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
			echo "<p>Please ensure all fields are filled in!";
		}else{
			
			echo '<h2> <span class="label label-default">Succesfully posted</span></h2>';
			$sql = "INSERT INTO feedback VALUES ('$value','$value1','$value3')";
			$exeadddeptSQL=mysql_query($sql);
		}
		mysql_close();
?>
							
					</form>
                </div>
            </form>

        </div>
    </div>
</div>





</body>
</html>