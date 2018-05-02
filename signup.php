<?php
session_start();
include "db.php";

/*$_SESSION['user_id'] = $user['id'];
$_SESSION['first_name'] = $user['first_name'];
$_SESSION['last_name'] = $user['last_name'];
$_SESSION['email'] = $user['email'];*/


if (isset($_GET['signup'])) {
    $query = "SELECT * FROM users WHERE email='{$_POST['email']}'";

    $store1 = mysqli_query($dbconnect, $query);
    if ($store1->num_rows != 0) {
        echo "{$query}";
        echo "{$_POST['email']}";

    } else {
        /*if (isset($_GET['signup'])) {*/

        $passhash = password_hash($_POST['password'], PASSWORD_DEFAULT);


            $sql = "INSERT INTO users (first_name, last_name, email, password) 
                VALUES ('{$_POST['first_name']}','{$_POST['last_name']}','{$_POST['email']}', '{$passhash}')";


            echo "{$sql}";
            $store1 = mysqli_query($dbconnect, $sql);

            /* if ($query == $sql) {

                 $_SESSION['user_id'] = $user['id'];
                 $_SESSION['first_name'] = $user['first_name'];
                 $_SESSION['logged_in'] = true;


             }*/

        echo "<script type='text/javascript'>location = '{$_SESSION['return']}'</script>";
        }
    }
/*}*/

else {


        echo "<div class = 'signupscreen'>";
        echo "<form action='signup.php?signup' method='post'>";
        echo "Enter Email to Sign Up:<br>";
        echo "<input type ='text' name='email' placeholder='Type Email here'><br>";
        echo "First Name:<br>";
        echo "<input type ='text' name='first_name' placeholder='Type Name here'><br>";
        echo "Last Name:<br>";
        echo "<input type ='text' name='last_name' placeholder='Type Surname here'><br>";
        echo "Password:<br>";
        echo "<input type ='text' name='password' placeholder='Type Password here'><br>";
        echo "<input type= 'submit' name='submitbutton' value='Submit'>";
        echo "</form></div>";
    }



?>