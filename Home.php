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

    <style>

        .footer-links{
            position: relative;
            bottom: 0px;
            left: 0px;
            height: 100px;
            width: 100%;
            border: 3px solid #363636;
            background-color: #363636;

        }
        .login{
            background-color: #363636;
            width:33%;
            color: blue;
            margin: 10px;
        }

        .img-responsive {
            display:block;
            margin-left:auto;
            margin-right:auto;
        }
        .mainContainer{
            width: 100%;
            background-color:#363636;
            display: flex;
            flex-direction: row;


        }
        .aboutContainer{

            background-color: #363636;
            width:33%;
            color: white;
            margin: 10px;
        <!-- margin for spacing -->

        }
        .test{

            width: 33%;
            background-color: #363636;
            color: white;
        }
        .twitter{


        }
        .imgcont {
            width: 100%;
            background-color: #363636;

        }
    </style>
</head>
<body>
<!--header start-->
<header>
    <div class="imgcont">
        <img src= "Images/BikeLake.jpg" class="img-responsive" alt="Cyclists going up hill with loch in the distance"  style="width:50%">
    </div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">ScotlandCycleCommunity</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="Photos.php">Photos</a></li>
                <li><a href="Routes.php">Routes</a></li>
                <li><a href="Events.php">Events</a></li>
                <li><a href="Message%20Board.php">Message Board</a></li>
            </ul>

        </div>
    </nav>
    <?php include "login.php";
    $_SESSION['return'] = 'Home.php';
    ?>
</header>
<!-- header end-->
<!-- main start-->
<main>
    <div class="mainContainer">
        <div class="aboutContainer">
            <h1>ABOUT</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                anim id est laborum.</p>
        </div>
        <div class="test">
            <h1>Contact Info</h1>
            <p>For any problems, comments or to contact us about an event you wish to include on our site please use the contact information below.</p>
            <h2>Email</h2>
            <p>siteadmin@scotlandcycleco.com</p>


        </div>
        <div class="twitter">
            <a class="twitter-timeline"  href="https://twitter.com/search?q=cycling" data-widget-id="976495588333248512">Tweets about cycling</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
                if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);
                }}(document,"script","twitter-wjs");</script>

        </div>
    </div>



</main>
<!--main end-->
<!--footer start-->
<footer>
    <div class="footer-links">
        <a href="https://www.britishcycling.org.uk/gbcyclingteam">
            <img src="Images/BC Logo Large.jpg" alt="https://www.google.com" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.sustrans.org.uk/?gclid=CjwKCAjwhcjVBRBHEiwAoDe5x51UWLEj36njaYk1LtvsGk_LS0Tm98-GnNdLo8Dixq2nzI3wjwJOiBoCWp0QAvD_BwE">
            <img src="Images/Sustrans.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.britishcycling.org.uk/scotland">
            <img src="Images/scottishcycling.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.http://www.cyclist.co.uk/">
            <img src="Images/cyclist.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.cyclingweekly.com">
            <img src="Images/cw-logo.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.britishcycling.org.uk/gbcyclingteam">
            <img src="Images/BC Logo Large.jpg" alt="https://www.google.com" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.sustrans.org.uk/?gclid=CjwKCAjwhcjVBRBHEiwAoDe5x51UWLEj36njaYk1LtvsGk_LS0Tm98-GnNdLo8Dixq2nzI3wjwJOiBoCWp0QAvD_BwE">
            <img src="Images/Sustrans.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.britishcycling.org.uk/scotland">
            <img src="Images/scottishcycling.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.http://www.cyclist.co.uk/">
            <img src="Images/cyclist.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.cyclingweekly.com">
            <img src="Images/cw-logo.png" alt="HTML tutorial" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
        <a href="https://www.britishcycling.org.uk/gbcyclingteam">
            <img src="Images/BC Logo Large.jpg" alt="https://www.google.com" style="width:120px; padding:5px ;height:84px;border:1px;float: left">
        </a>
    </div>
</footer>
<!-- footer end-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
