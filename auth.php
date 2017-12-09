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
        <link rel="stylesheet" type="text/css" href="inside/innernavbar/navbar.css"/>
        <link rel="stylesheet" type="text/css" href="inside/footer/footer.css"/>
        <?php $currentPage = 'auth.php';?>
    </head>
    <body>    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <?php include 'inside/innernavbar/navbar.php'?>
        <section>
            <h1 class="pageTitle">Login</h1>
            <div id="welcomeMessage">
                <p></p>
            </div>
        </section>
        <?php include 'inside/footer/footer.php'?>
    </body>
</html>