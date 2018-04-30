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

    /* Create four equal columns that sits next to each other */
    .column {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
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
<div class = "login">
<?php include "login.php";
$_SESSION['return'] = 'Photos.php';
?>
</div>
    <!-- Photo Grid -->
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