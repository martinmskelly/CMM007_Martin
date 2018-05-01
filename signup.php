<?php
session_start();
include "db.php";



echo "<div class = 'signupscreen'>";
echo "<form action='signup.php?signup' method='post'>";
echo "Enter Email to Sign Up:<br>";
echo "<input type ='text' name='email' placeholder='Type Email here'><br>";
echo "Password:<br>";
echo "<input type ='text' name='password' placeholder='Type Password here'><br>";
echo "<input type= 'submit' name='submitbutton' value='Submit'>";
echo "</form></div>";

?>