<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CycleGroup</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        * {box-sizing: border-box;}
        ul {list-style-type: none;}
        body {font-family: Verdana, sans-serif;
            background-color: #363636;
        }



        .calContainer{
            position: fixed;
            bottom: 0px;
            right:0px;
            height:100%;
            width: 33%;
            background-color: #363636;


        }
        .login{
            background-color: #363636;
            width:100%;
            color: white;
            margin: 10px;
        }
        input{
            color: #363636;
        }

        .month {
            padding: 70px 25px;
            width: 100%;
            background: blue;
            text-align: center;
        }

        .month ul {
            margin: 0;
            padding: 0;
        }

        .month ul li {
            color: white;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .month .prev {
            float: left;
            padding-top: 10px;
        }

        .month .next {
            float: right;
            padding-top: 10px;
        }

        .weekdays {
            margin: 0;
            padding: 10px 0;
            background-color: #ddd;
        }

        .weekdays li {
            display: inline-block;
            width: 13.6%;
            color: #666;
            text-align: center;
        }

        .days {
            padding: 10px 0;
            background: #eee;
            margin: 0;
        }

        .days li {
            list-style-type: none;
            display: inline-block;
            width: 13.6%;
            text-align: center;
            margin-bottom: 5px;
            font-size:12px;
            color: #777;
        }

        .days li .active {
            padding: 5px;
            background: blue;
            color: white !important
        }


        @media screen and (max-width:720px) {
            .weekdays li, .days li {width: 13.1%;}
        }

        @media screen and (max-width: 420px) {
            .weekdays li, .days li {width: 12.5%;}
            .days li .active {padding: 2px;}
        }

        @media screen and (max-width: 290px) {
            .weekdays li, .days li {width: 12.2%;}
        }

        .infoContainer{
            width: 67%;
            height: 95%;
            background-color: #363636;
            color: white;

        }
    </style>
</head>
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
    $_SESSION['return'] = 'Events.php';
    ?>
</div>
<!--displays a calander from www.w3school.com-->
<div class="calContainer">
<div class="month">
    <ul>
        <li class="prev">&#10094;</li>
        <li class="next">&#10095;</li>
        <li>
            August<br>
            <span style="font-size:18px">2017</span>
        </li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
    <li>12</li>
    <li>13</li>
    <li>14</li>
    <li>15</li>
    <li>16</li>
    <li>17</li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
    <li>21</li>
    <li>22</li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
    <li>31</li>
</ul>
</div>
<div class="infoContainer">
    <!--the info container displays the events coming up and makes them clickable to take the
    user directly to the event website-->
    <li><a href="https://www.entrycentral.com/selkirksportive"><h3>Selkirk Sportive</h3></a></li>
    <p>Event Date: 6th May 2018</p>
    <p>Distance: 75km </p>
    <p>Choice of three single-loop and fully marked courses (approx. 25km, 50km and 75km).
        Set off from Selkirk High Street, for an epic ride in the Scottish Borders.</p>
    <li><a href="http://cairnomountchallenge.org.uk/the-tayside-challenge/"><h3>Tayside Challenge</h3></a></li>
    <p>Event Date: 2nd May 2018</p>
    <p>Distance: 81 miles </p>
    <p>The Tayside Challenge gives a choice of 81 mile or 46 mile routes. The 46 mile route is not exactly for
        beginners but may be a great warm up for bigger challenges to come as the year goes on. The 81 mile route is
        challenging but offers some truly spectacular views. Both routes start and finish at Pitcairngreen.</p>
    <li><a href="https://www.etapecaledonia.co.uk/"><h3>Etape Caledonia</h3></a></li>
    <p>Date: 20th May, 2018</p>
    <p>Distance: 81 miles</p>
    <p>Closed road cycle in Pitlochry.</p>
    <li><a href="http://www.tourdeforth.com/"><h3>Tour de Forth</h3></a></li>
    <p>Event Date: 3rd June, 2018</p>
    <p>Distance: 60 miles</p>
    <p>Route around the River Forth via the Forth Road and Kincardine bridges.</p>



</div>
</body>
</html>