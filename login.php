<?php
session_start();
include "db.php";

if (isset($_GET['login'])) {
    $query = "SELECT * FROM users WHERE email='{$_POST['email']}'";

    $store = mysqli_query($dbconnect, $query);
    if ($store->num_rows == 0) {
        echo "{$query}";
        echo "{$_POST['email']}";

    } else {

        $user = mysqli_fetch_assoc($store);

        if (password_verify($_POST['password'], $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['logged_in'] = true;
        }
    }
    echo "<script type='text/javascript'>location = '{$_SESSION['return']}'</script>";
} else {
    if ($_SESSION['logged_in']){
        echo "Hello {$_SESSION['first_name']}<br/>";
        echo "<form action = 'login.php?logout'>";
        echo "<input type= 'submit' name='logout' value='logout'></form>";
    } else {
        echo "<div class = 'loginscreen'>";
        echo "<form action='login.php?login' method='post'>";
        echo "Email:<br>";
        echo "<input type ='text' name='email' placeholder='Type Username here'><br>";
        echo "Password:<br>";
        echo "<input type ='text' name='password' placeholder='Type Password here'><br>";
        echo "<input type= 'submit' name='submitbutton' value='Submit'>";
        echo "</form></div>";
    }
}
if (isset($_GET['logout'])) {
    $_SESSION['logged_in'] = false;
    $_SESSION['user_id'] = 0;
    $_SESSION['first_name'] = "Guest";
    echo "<script type='text/javascript'>location = '{$_SESSION['return']}'</script>";
}
?>