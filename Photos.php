<?php
//session start remembers the user
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
    * {
        box-sizing: border-box;
    }
    .login{
        background-color: #363636;
        width:100%;
        color: white;
        margin: 10px;
    }

    body {
        margin: 0;
        font-family: Arial;
        background-color: #363636;
    }

    .header {
        text-align: center;
        padding: 32px;
    }

    .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
        flex-direction: row;
    }
    .row img{
        max-width: 60%;
        max-height: 400px;
        object-fit: scale-down;
        display: inline;
    }
/*makes the font colour of the submit button black*/
    input{
        color: #363636;
    }

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
                <li><a href="PhotoUpload.html">Photo Upload</a></li>

            </ul>

        </div>
    </nav>


</header>
<body>

<!--<div class="background" style="background-color: #363636">-->
    <!-- Header -->
    <br/>
    <br/>
    <br/>
<!--includes the login form for users to login-->
<div class = "login">
<?php include "login.php";
$_SESSION['return'] = 'Photos.php';
?>
</div>
    <!-- Photo Grid  scans the uploads folder for new images. looks for a time/ date and sorts to have the newest
    photos display first-->
    <div class="row">
        <?php


        $files1 = scandir("uploads",1);

        //print_r($files1);
        for($i = 0; $i< count($files1)-2;$i++) {
            echo "<img src='uploads/{$files1[$i]}'>";
        }


        ?>

        </div>
    <!--</div>-->
</body>