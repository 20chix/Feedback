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

            <form  action ="connect.php" method="post">
                <div class="form-group">
                    <label for="formGroupExampleInput">Create Topic</label>
                    <input type="text" class="form-control" name="feedback_topic" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Enter comment about topic</label>


                    <textarea class="form-control" name="feedback_comment" rows="10"></textarea>
                    <button type="submit" class="btn btn-default">Post</button>
					<form  action ="" method="link">  
					<button type="submit" class="btn btn-default">Show comment</button>		
					</form>
                </div>
            </form>

        </div>
    </div>
</div>





</body>
</html>