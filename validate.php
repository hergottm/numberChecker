<!DOCTYPE html>
<html>
<head>
    <title>EnviroWestern - Refill to Win!</title>
    <meta name=viewport content='width=600'>
    <link rel="stylesheet" type="text/css" href="assests/css/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
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
                  <?php
                  if(isset($_POST['submit'])){
                      // retrieve details from POST submission
                      $firstName = $_POST['fname'];
                      $lastName = $_POST['lname'];
                      $Email = $_POST['email'];
                      $uniqueCode = $_POST['code'];
                      // prevent MYSQL injection
                      $uniqueCode = stripslashes($uniqueCode);

                      //check to see if the input is numeric
                      if(is_numeric($uniqueCode) == true){

                          // Set the variables for the database access:
                          require_once('connectvars.php');
                          // Make a MySQL Connection
                          $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


                          $query = "SELECT * FROM envirowestern WHERE code='$uniqueCode'" ;
                          $result = mysqli_query($dbc, $query);
//                         print ("The query is:<br />$query<br /><br />");


                          if(mysqli_num_rows($result) > 0){
                              while($Row = mysqli_fetch_array($result)) {
                                  echo "<h2 class=\"alert alert-success\" id=\"winner\"><i class=\"fas fa-thumbs-up\">$Row[fname] HAS TICKET $Row[code] AND HAS WON $Row[prize]!!!!</i></h2>";
                                  echo "<h3>Please visit Western's UCC Building<br>Room 340 to claim your prize!!<br>Make sure you bring the ticket!!<br></h3>";
                                  $update = "UPDATE envirowestern SET fname='$firstName', lname='$lastName', email='$Email' WHERE code='$uniqueCode'";
//
//                                  if (mysqli_query ($dbc, $update)) {
//                                      print "The update was successfully executed!<br />";
//                                  } else {
//                                      print "The query could not be executed!<br />" . mysqli_error($dbc);
//                                  }
                              }
                              exit();

                          } else {
                              print ("<h2 class=\"lost alert alert-danger\">You do not have a winning ticket\nPLEASE PLAY AGAIN</h2>");
                              ?>
                              <div class="form">
                                  <form action="index.php" method="POST">
                                      <div class="form-group">
                                          <input class="btn btn-lg btn-success btn-block" type="submit" name="back"
                                                 value="Try Again">
                                      </div>
                                  </form>
                              </div>
                              <?php
                              exit();
                          }

                      } else {
                         header("location:javascript://history.go(-1)");
                          ?>

<!--                          <div class="form">-->
<!--                                  <form action="index.php" method="POST">-->
<!--                                      <div class="form-group">-->
<!--                                          <input class="btn btn-lg btn-success btn-block" type="submit" name="back"-->
<!--                                                 value="Try Again">-->
<!--                                      </div>-->
<!--                                  </form>-->
<!--                              </div>-->
                  <?php
                      }
                  }
                  mysqli_close ($dbc);
                  ?>

              </div>
          </div>
      </div>
  </div>

    <footer>
        <img id="usc_logo" src="assests/images/usc_logo.png">
        <img id="enviro_logo" src="assests/images/enviro_logo.png">
    </footer>
  </body>
</html>