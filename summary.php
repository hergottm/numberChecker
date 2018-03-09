<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Create TABLE</title>
</head>
<body>

<?php
##########################################################################
$password = "AsHley18";  // Modify Password each time
##########################################################################
?>
<?php

print "<h2 align=\"center\">ENVIROWESTERN DATABASE TABLE INFORMATION</h2>";
// If password is valid let the user get access
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {

// Set the variables for the database access:
    require_once('connectvars.php');

    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    $query = "SELECT * FROM envirowestern";
    $result = mysqli_query($dbc, $query);

    // Create a table.
    print ("<table border=\"1\" width=\"75%\" cellspacing=\"2\" cellpadding=\"2\" align=\"center\">");
    print ("<tr align=\"center\" valign=\"top\">");
    print ("<td align=\"center\" valign=\"top\"><b>ID</b></td>");
    print ("<td align=\"center\" valign=\"top\"><b>Code</b></td>");
    print ("<td align=\"center\" valign=\"top\"><b>Prize</b></td>");
    print ("<td align=\"center\" valign=\"top\"><b>First Name</b></td>");
    print ("<td align=\"center\" valign=\"top\"><b>Last Name</b></td>");
    print ("<td align=\"center\" valign=\"top\"><b>Email</b></td>");
    print ("</tr>");

    // Fetch the results from the database.
    while ($Row = mysqli_fetch_array($result)) {
        print ("<tr align=\"center\" valign=\"top\">");
        print ("<td align=\"center\" valign=\"top\">$Row[id]</td>");
        print ("<td align=\"center\" valign=\"top\">$Row[code]</td>");
        print ("<td align=\"center\" valign=\"top\">$Row[prize]</td>");
        print ("<td align=\"center\" valign=\"top\">$Row[fname]</td>");
        print ("<td align=\"center\" valign=\"top\">$Row[lname]</td>");
        print ("<td align=\"center\" valign=\"top\">$Row[email]</td>");
        print ("</tr>");
    }
    mysqli_close($dbc);

    print ("</table>");
    $currentDate = date("l F j,Y");
    print ("<br /><p style=\"text-align: center\"><em>{Created by: Matt Hergott} &nbsp;&nbsp;Date: $currentDate </em></p>");


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