<?php
$_SESSION['expire_time'] = 5*60; // Time in seconds
require_once 'ensure_auth.php';
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="normalize.css" />
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" type="text/css" href="index.css" />
        <link rel="stylesheet" type="text/css" href="innnernavbar/navbar.css" />
        <link rel="stylesheet" type="text/css" href="footer/footer.css" />
        <?php $currentPage = 'index.php';?>
    </head>
    <body>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <?php include 'inside/innernavbar/navbar.php'?>
        <section>
            <h1 class="pageTitle">Cocktails</h1>
            <div id="welcomeMessage">
                <p></p>
            </div>
        </section>
        <?php include 'inside/footer/footer.php'?>
    </body>
</html>
