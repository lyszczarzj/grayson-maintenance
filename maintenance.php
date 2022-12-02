<?php
header('HTTP/1.1 503 Service Unavailable'); // Send 503 Response Code
header('Retry-After: 7200') // Estimated Three Hours?
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="default-src 'none'; style-src 'self' https://fonts.googleapis.com; media-src 'self'; img-src 'self'; font-src 'self' *.fontawesome.com fontawesome.com https://fonts.gstatic.com; script-src 'self' *.fontawesome.com fontawesome.com https://fonts.googleapis.com;" http-equiv="Content-Security-Policy"/>
        <title>Under Maintenance | Grayson College</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="Grayson College" name="author"/>
        <link href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,700&amp;display=swap" rel="stylesheet"/>
        <link href="temp-files/reset.css" rel="stylesheet"/>
        <link href="temp-files/styles.css" rel="stylesheet"/>
    </head>
    <body>
        <main>
            <div class="container">
            <img class="logo" width="503" height="275" alt="Grayson College" src="temp-files/grayson-web-logo-5.png"/>
            <h1>Under Maintenance</h1>
            <hr/>
            <p>The Grayson College website is temporarily down for maintenance. <br/>Please check back soon!</p>
            <p>MyViking Portal and Canvas are still accessible at this time.</p>
            <a class="btn" title="Access GC Identity Portal" href="https://gcidentity.grayson.edu/">MyViking / GCIdentity</a>
            </div>
        </main>
    </body>
</html>