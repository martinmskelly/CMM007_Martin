<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CycleGroup</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>

    body {
        background-color: #363636;
    }

    .messageContainer{
        width: 100%;
        height: 95%;

        color: white;
        display: flex;
        flex-direction: row;


    }
    .login{

        width:100%;
        color: white;
        margin: 10px;
    }


    td {
        border-bottom: 1px solid white;
    }

    table{
        border-collapse: separate;
        border-spacing: 0px 10px;
    }
    input{
        color: black;
    }
</style>

<header>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">ScotlandCycleCommunity</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="Photos.php">Photos</a></li>
                <li><a href="Routes.php">Routes</a></li>
                <li><a href="Events.php">Events</a></li>
                <li><a href="Message%20Board.php">Message Board</a></li>
            </ul>

        </div>
    </nav>

</header>
<body>
<br/>

<br/>
<div class = "login">
    <?php include "login.php";
    $_SESSION['return'] = 'Message%20Board.php';
    ?>
</div>
<div class="messageContainer">
<h1>Message Board</h1>

    <?php

    include "db.php";


    if (isset($_GET['newmessage'])){

        $query = "INSERT INTO message(user_id, subject, message_txt )
                  VALUES ('{$_SESSION['user_id']}','{$_POST['subject']}','{$_POST['message']}')";



        $store = mysqli_query($dbconnect, $query);

        //echo "<script type='text/javascript'>location = 'Message%20Board.php'</script>";

    }

    $query = "SELECT subject, message_txt, date FROM message ORDER BY date DESC LIMIT 5 ";

    $store = mysqli_query($dbconnect, $query);

    echo "<table>";
    while ($fetch = mysqli_fetch_array($store)) {

        echo " <tr><th>{$fetch['subject']}</th><th>{$fetch['date']}</th></tr>";
        echo " <tr><td colspan='2'>{$fetch['message_txt']}</td></tr>";
    }

    echo "</table>";
    echo "<div class = 'messageinput'>";
    echo "<form action='Message%20Board.php?newmessage' method='post'>";
    echo "Subject:<br>";
    echo "<input type ='text' name='subject' placeholder='Type Subject here'><br>";
    echo "Message:<br>";
    echo "<input type ='text' name='message' placeholder='Type Message here'><br>";
    echo "<input type= 'submit' name='submitbutton' value='Submit'>";
    echo "</form>";



    ?>


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>