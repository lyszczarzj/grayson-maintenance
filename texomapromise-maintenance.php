<?php
header('HTTP/1.1 503 Service Unavailable'); // Send 503 Response Code
header('Retry-After: 3600') // Try again in one hour?
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="default-src 'none'; style-src 'self' https://fonts.googleapis.com; media-src 'self'; img-src 'self'; font-src 'self' *.fontawesome.com fontawesome.com https://fonts.gstatic.com; script-src 'self' *.fontawesome.com fontawesome.com https://fonts.googleapis.com;" http-equiv="Content-Security-Policy"/>
        <title>Under Maintenance | Texoma Promise</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta content="Texoma Promise" name="author"/>
        <link href="https://fonts.gstatic.com" rel="preconnect"/>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;1,100;1,200;1,300;1,400;1,700&amp;display=swap" rel="stylesheet"/>
        <link href="temp-files/reset.css" rel="stylesheet"/>
        <link href="temp-files/tp-styles.css" rel="stylesheet"/>
    </head>
    <body>
        <main>
            <div class="container">
            <img class="logo" width="500" height="175" alt="Texoma Promise Pledge" src="temp-files/texomapromise-logo-web.jpg"/>
            <h1>Under Maintenance</h1>
            <hr/>
            <p>The Texoma Promise website is temporarily down for maintenance. <br/>Please check back soon!</p>
            <p>The Promise Pledge form is still available</p>
            <a class="btn" title="Texoma Promise Pledge Form" href="https://grayson.tfaforms.net/f/texomapromise">Complete the Promise Pledge</a>
            </div>
        </main>
    </body>
</html>