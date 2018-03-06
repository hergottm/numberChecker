<!DOCTYPE html>
<html>
    <head>
        <title>EnviroWestern - Refill to Win!</title>
        <meta name=viewport content='width=600'>
                <link rel="stylesheet" type="text/css" href="main.css">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet">
    </head>
<body>
        <div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div id="content">
    					<h3>Each day, 12,000 beverages are served in single-use disposable cups on the Western campus.</h3>
    					<h3>Choose to reuse. Bring a resuable mug.</h3>
    					<h2>Thanks for playing EnviroWestern's</h2>
    					<h1>Refill to Win!</h1>
    					<div class="form">
                            <form action="validate.php" method="POST">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="code" placeholder="Enter Number" minlength="8" maxlength="8" required>
                                </div>
                                <div class="form-group">
                                  <input class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="Submit Prize">
        			                      
        			                 </div>
                            </form>
                        </div>
    					<h3>Please enter your unique code</h3>
    				</div>
    			</div>
    		</div>
        </div>
        <footer>
            <img id="usc_logo" src="usc_logo.png">
            <img id="enviro_logo" src="enviro_logo.png">
        </footer>
</body>
</html>
<?php
  require 'close_connection.asp';
?>
