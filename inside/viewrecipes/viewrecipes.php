<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../../normalize.css" />
        <link rel="stylesheet" type="text/css" href="../../main.css"/>
        <link rel="stylesheet" type="text/css" href="../innernavbar/navbar.css"/>
        <link rel="stylesheet" type="text/css" href="../footer/footer.css"/>
        <link rel="stylesheet" type="text/css" href="viewrecipes.css"/>
        <?php $currentPage = 'viewrecipes.php';?>
    </head>
    <body>    
        <section>
            <div class="content">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <?php include '../innernavbar/navbar.php'?>
                <article>
                    <h1 class="pageTitle">View Recipes</h1>
                    <div class="card">
                        <img src="../../images/cocktailIcon.png" alt="Avatar" width="100" height="100">
                        <div class="container">
                            <h4><b>Drink</b></h4> 
                            <p>Drink description</p> 
                        </div>
                    </div>
                </article>
                <?php include '../footer/footer.php'?>
            </div>
        </section>
    </body>
</html>