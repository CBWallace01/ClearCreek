<?php

$isLive = getenv("isLive");

$aboutUsFile = fopen("content/aboutUs.txt", "r");
$aboutUsContent = fread($aboutUsFile,filesize("content/aboutUs.txt"));
fclose($aboutUsFile);

$servicesFile = fopen("content/services.txt", "r");
$servicesContent = fread($servicesFile,filesize("content/services.txt"));
fclose($servicesFile);

$processFile = fopen("content/process.txt", "r");
$processContent = fread($processFile,filesize("content/process.txt"));
fclose($processFile);

$contactUsFile = fopen("content/contactUs.txt", "r");
$contactUsContent = fread($contactUsFile,filesize("content/contactUs.txt"));
fclose($contactUsFile);

$ourTeamFile = fopen("content/ourTeam.txt", "r");
$ourTeamContent = fread($ourTeamFile,filesize("content/ourTeam.txt"));
fclose($ourTeamFile);

if($isLive == "true"){
    echo "<!DOCTYPE html>
<html>
    <head>
        <title>Clear Creek Properties</title>
        <link rel=\"stylesheet\" href=\"clearcreek.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"clearcreek.js\"></script>
    </head>
    <body onload=\"startup()\">
        <div id=\"menu\">
        <img src=\"images/ClearCreek.png\">
            <div id=\"navigation\">
                <div><a href=\"#\" data-target=\"home\">Home</a></div>
                <div><a href=\"#\" data-target=\"aboutUs\">About Us</a></div>
                <div><a href=\"#\" data-target=\"services\">Services</a></div>
                <div><a href=\"#\" data-target=\"process\">Our Process</a></div>
                <div><a href=\"#\" data-target=\"ourTeam\">Our Team</a></div>
                <div><a href=\"#\" data-target=\"contactUs\">Contact Us</a></div>
            </div>
        </div>
        <div id=\"content\">
            <div id=\"home\" class=\"contentBlock\">Home</div>
            <div id=\"aboutUs\" class=\"contentBlock\"><h1>About Us</h2>$aboutUsContent</div>
            <div id=\"services\" class=\"contentBlock\"><h1>Services</h2>$servicesContent</div>
            <div id=\"process\" class=\"contentBlock\"><h1>Our Process</h2>$processContent</div>
            <div id=\"ourTeam\" class=\"contentBlock\"><h1>Our Team</h2>$ourTeamContent</div>
            <div id=\"contactUs\" class=\"contentBlock\"><h1>Contact Us</h2>$contactUsContent</div>
        </div>
    </body>
</html>";
}
else{
    echo "<!DOCTYPE html>
<html>
    <head>
        <title>Clear Creek Properties</title>
        <link rel=\"stylesheet\" href=\"clearcreek.css\">
    </head>
    <body style=\"background-image: url(images/ClearCreek_3D.jpg);background-size: auto 100%;background-repeat: no-repeat;background-position: center -60px;height:100vh;overflow:hidden;\">
        <div style=\"text-align: center;margin-top: 100px;width: 100%;font-size: xx-large;\">Coming Soon!</div>
        <div style=\"width: 100%;text-align: center;display: block;position: absolute;bottom: 20px;font-size: xx-large;\">
            In the mean time, check us out on social media!<div>
            <div>
                <img src=\"images/instagram.svg\" style=\"height: 25px;margin-right: 10px;\"><a href=\"https://instagram.com/clearcreekproperties\">Instagram</a>
            </div>
            <div>
                <img src=\"images/facebook.svg\" style=\"height: 25px;margin-right: 10px;\"><a href=\"https://facebook.com/clearcreekpro\">Facebook</a>
            </div>
        </div>
        </div>
    </body>
</html>";
}

?>