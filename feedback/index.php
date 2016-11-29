<!DOCTYPE html>
<html lang="en">

<?php 

mysql_connect('elephant.ecs.westminster.ac.uk','w1530819','Tvr60rEymLqV');


mysql_select_db('w1530819_0');



$sql = "SELECT feedback_topic FROM feedback";

$records  = mysql_query($sql);




?>
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
    <link href="css/stylefeed.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
</body>
<div class="container">
   <!--  <div class="row" id="login-container">
        <div class="span8 offset2">
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
    </div>-->
	
	
	<br/><br/>

<div class="container">
	<div class="row">
		
        <div class="col-md-6">

            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-primary">Everything</button>
                <!--<button type="button" class="btn btn-default">Chat</button>
                <button type="button" class="btn btn-default">Issues</button>
                <button type="button" class="btn btn-default">Reviews</button>
                <button type="button" class="btn btn-default">Announcements</button-->
            </div>
            
        </div>
        <div class="col-md-6">
            
            <div class="row">
             
                <div class="col-md-9 text-right">
                
                   <div class="input-group">
                   <!--   <div class="input-group-btn">
                        <button type="button" class="btn btn-gray dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Filters <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div> /btn-group -->
					  
                      <input type="text" class="form-control" placeholder="Search" aria-label="...">
                    </div><!-- /input-group -->            
                
                </div>
                <div class="col-md-3 text-right">
                    
                                   
                    
                </div>
            
            </div>
            
        </div>        

	</div>
    <div class="row">
        <div class="col-md-12">
        
            <div class="topcis-header">
                
                <div class="row">
                
                    <div class="col-md-10">
                    </div>
                    
                    <div class="col-md-2 text-right">
					
					<a href="addtopic.php" class="button">
					<button type="button" class="btn btn-primary">Start Topic</button>
    
                         </a> 
						 
                
                    </div>
                    
                </div>
                
            </div>
    
    </div>
        
    </div>
</div>
	<div class="span12">   
<div class="widget stacked widget-table action-table">
    				
				<div class="widget-header">
					<i class="icon-th-list"></i>
					<h3>Topics</h3>
				</div> <!-- /widget-header -->
				
				<div class="widget-content">
					
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Choose a topic!</th>
								
							</tr>
						</thead>
						<tbody>
							
<?php
 $x = 0;

while($studio= mysql_fetch_assoc($records)){
		$x++;
			
	echo"<tr><td>$x) ".$studio['feedback_topic']. "</td></tr>";	
}
?>	
						</tbody>
						</table>
					
				</div> <!-- /widget-content -->
			
			</div> <!-- /widget -->
            </div>
	
</div>





</body>
</html>