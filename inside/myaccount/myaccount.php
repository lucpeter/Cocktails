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
        <link rel="stylesheet" type="text/css" href="myaccount.css"/>
        <link rel="stylesheet" type="text/css" href="../innernavbar/navbar.css"/>
        <link rel="stylesheet" type="text/css" href="../footer/footer.css"/>
        <?php $currentPage = 'myaccount.php';?>
    </head>
    <body>    
        <section>
            <div class="content">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <?php include '../innernavbar/navbar.php'?>
                <article>
                    <h1 class="pageTitle">Add Recipes</h1>
                    <form method="post" action="io_submit.php">
                        <fieldset id="personalInfo">
                            <legend>Personal Information:</legend>
                            <label for="name">Name:</label>
                            <input id="name" type="text" name="name" required disabled>
                            <br>
                            <label for="username">Username:</label>
                            <input id="username" type="text" name="username" required disabled>
                        </fieldset>
                        <fieldset id="passwordChange">
                            <legend>Change Pasword:</legend>
                            <label for="oldpsw">Old Password*:</label>
                            <input id="oldpsw" type="password" name="oldpsw" placeholder="Old Password" required><p id="oldpsw" class="errorMessage" hidden>Old password is not valid.</p><br>
                            <label for="newpsw">Old Password*:</label>
                            <input id="newpsw" type="password" name="newpsw" placeholder="Old Password" required><p id="newpsw" class="errorMessage" hidden>New password is not valid.</p><br>                            
                            <input type="submit" value="Update Password">
                        </fieldset>
                    </form>
                </article>
                <?php include '../footer/footer.php'?>
            </div>
        </section>
    </body>
</html>