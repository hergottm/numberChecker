<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Validate</title>
  </head>
  <body>
    <?php
        // Set the variables for the database access:
        require_once('connectvars.php');
        // Make a MySQL Connection
        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if(isset($_POST['submit'])){
            // retrieve details from POST submission
            $uniqueCode = $_POST['code'];
            // prevent MYSQL injection
            $uniqueCode = stripslashes($uniqueCode);

            // query the DB and find if id exists
            $query1 = "SELECT * FROM envirowestern WHERE code='$uniqueCode'";
            $result1 = mysqli_query($dbc, $query1);

            $query2 = "SELECT * FROM envirowestern WHERE code='$uniqueCode'" ;
            $result2 = mysqli_query($dbc, $query1);
//            print ("The query is:<br />$query<br /><br />");

            if(mysqli_num_rows($result) > 0){
                print ("You have won!!!");
                print ("A form will eventually display to enter your personal details");
                exit();

            } else {
                print ("You have lost...");
                exit();
            }
        }
        mysqli_close ($dbc);
     ?>
  </body>
</html>
