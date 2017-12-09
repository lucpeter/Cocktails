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
        <link rel="stylesheet" type="text/css" href="auth.css" />
        <link rel="stylesheet" type="text/css" href="inside/innernavbar/navbar.css"/>
        <link rel="stylesheet" type="text/css" href="inside/footer/footer.css"/>
        <?php $currentPage = 'auth.php';?>
    </head>
    <body> 
        <section>
            <div class="content">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <section>
                    <h2>Login Form</h2>
                    <form action="p" autocomplete="off">
                        <legend>Register:</legend>
                        <div class="imgcontainer">
                            <img src="images/cocktailIcon.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label hidden><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                            <label hidden><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                            <button type="submit">Login</button>
                        </div>

                        <div class="container cancelContainer">
                            <button type="button" class="cancelbtn">Cancel</button>
                            <span class="psw"><a href="#">Forgot password?</a></span>
                        </div>
                    </form>
                    <form action="p" autocomplete="off" style="float: right;">
                        <legend>Login:</legend>
                        <div class="imgcontainer">
                            <img src="images/cocktailIcon.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label hidden><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="uname" required>
                            <label hidden><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required>
                            <button type="submit">Login</button>
                        </div>

                        <div class="container cancelContainer">
                            <button type="button" class="cancelbtn">Cancel</button>
                            <span class="psw"><a href="#">Forgot password?</a></span>
                        </div>
                    </form>
                </section>
                <?php include 'inside/footer/footer.php'?>
            </div>
        </section>
    </body>
</html>