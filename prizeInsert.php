<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prize Insert</title>
  </head>
  <body style="background-color: rgb(229,243,247);">
  <?php
  ##########################################################################
  $password = "AsHley18";  // Modify Password each time
  ##########################################################################
  ?>
  <?php

  print "<h2 align=\"center\">Insert Login Screen</h2>";
  // If password is valid let the user get access
  if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
  ?>

  <h3><b>Enter a unique code and a prize</b></h3>
  <form action="insertHandler.php" method="POST">
      Unique Code <input type="text" name="code" size="20"><br />
      Prize <input type="text" name="prize" size="30"><br />
  <input type="submit" name="submit" value="Submit Prize">
  </form>

  <?php
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter your password for access<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}

?>
  </body>
  </html>
