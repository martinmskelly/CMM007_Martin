<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CycleGroup</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        body {


            background-color: #363636;
        }

        .login{
            background-color: #363636;
            width:33%;
            color: white;
            margin: 10px;
        }

        .mnContainer{
            position: fixed;
            color: white;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 95%;
            border: 3px solid #363636;
            background-color:#363636;
            display: flex;
            flex-direction: row;


        }

        .listContainer{
            background-color: #363636;
            width: 100%;
            height: 100%;
        }
        input{
            color: #363636;
        }


        function myMap(x,y) {
        var mapProp= {
            center:new google.maps.LatLng(x,y),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }


    </style>
</head>
<body>
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


<!-- this doesnt seem to be doing anything
<div id="map"></div>
 <script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('googleMap'), {
            center: {lat: -33.8567844, lng: 151.2131027},
            zoom: 15
        });
    }

</script>-->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVYp8c5R7xJJxHFigs_7INrf2fuPiCLIY&callback=initMap"
        async defer></script>

<main>
    <br/>

    <br/>

    <div class="mnContainer">
        <div class="listContainer">
            <div class = "login">
                <?php include "login.php";
                $_SESSION['return'] = 'Routes.php';
                ?>
            </div>
          <h1>Routes</h1>
            <!--have three links when they are clicked they bring up the map on the screen centring in on the gps
            data I have set below-->
            <div id="googleMap" style="width:100%;height:50%;"></div>
            <a onClick="myMap(-31.9546904,115.8350292)">Route 1</a>
            <p>Title: Perth CBD, Distance: 15km, Traffic: Heavy</p>
            <h5>Description:</h5>
            <p>Starting at .... head south on ... for ...</p>
            <a onClick="myMap(-37.8274851,144.9527565)">Route 2</a>
            <p>Title: Melbourne CBD, Distance: 25km, Traffic: Heavy</p>
            <h5>Description:</h5>
            <p>Starting at .... head south on ... for ...</p>
            <a onClick="myMap(-33.8567844,151.2131027)">Route 3</a>
            <p>Title: Sydney CBD, Distance: 35km, Traffic: Heavy</p>
            <h5>Description:</h5>
            <p>Starting at .... head south on ... for ...</p>
            <script>
                function myMap(x,y) {
                    if(x==undefined || y==undefined){
                        x = 55.508742;
                        y= -1.120850;
                    }
                    var mapProp= {
                        center:new google.maps.LatLng(x,y),
                        zoom:15,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>
            <!--the google API using the key to allow me to use googlemaps taken from www.ggogle.com-->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4jChq2-_I4Dc0KSh3VI_OCaCDcG68oq8&callback=myMap">
                map.onload(myMap(-31.9546904,115.8350292));
            </script>

        </div>
    </div>

</main>

</body>