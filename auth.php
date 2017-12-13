<?php
$errors = [
    'register' => [],
    'login' => []
];

if (isset($_POST['login'])) {
    require_once 'database/database.php';
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if ($db->is_valid_user($errors['login'], $user, $pass)) {
        $_SESSION['user'] = $user;
        header('Location: inside/');
    }
}

if (isset($_POST['register'])) {
    require_once 'database/database.php';
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db->insert_user($errors['register'], $email, $pass);

    $subject = 'Complete your registration to Cocktales';
    $body = <<<EOD
Thanks for registering with Cocktales!
<a href="http://luna.mines.edu/lucpeter/Cocktails/verify.php?uid=$email">Click this link to complete your registration</a>
EOD;

    mail($email, $subject, $body);
}
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
                    <form method="post" action="" autocomplete="off">
                        <h3>Register</h3>
                        <div class="imgcontainer">
                            <img src="images/cocktailIcon.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="errorcontainer">
                            <?php
                            if (!empty($errors['register'])) {
                                echo "<ul>";
                                foreach ($errors['register'] as $e) {
                                    echo "<li style='color: red; list-style: none;'>$e</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                        </div>
                        <div class="container">
                            <label hidden><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required>
                            <label hidden><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pass" required>
                            <button type="submit" name="register">Register</button>
                        </div>
                    </form>
                    <form method="post" action="" autocomplete="off" style="float: right;">
                        <h3>Login</h3>
                        <div class="imgcontainer">
                            <img src="images/cocktailIcon.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="errorcontainer">
                            <?php
                            if (!empty($errors['login'])) {
                                echo "<ul>";
                                foreach ($errors['login'] as $e) {
                                    echo "<li style='color: red; list-style: none;'>$e</li>";
                                }
                                echo "</ul>";
                            }
                            ?>
                        </div>
                        <div class="container">
                            <label hidden><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="user" required>
                            <label hidden><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="pass" required>
                            <button type="submit" name="login">Login</button>
                        </div>
                        <div class="container cancelContainer">
                            <span class="psw"><a href="reset.php">Forgot password?</a></span>
                        </div>
                    </form>
                </section>
                <?php include 'inside/footer/footer.php'; ?>
            </div>
        </section>
    </body>
</html>
