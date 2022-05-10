<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="stylesheet/style.css">

    <title>Login Page </title>
</head>
<body>
    <div class="login_container">


        <form action="" method="POST" class="login-form">
            <h2> Login</h2>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <label>Username</label>
            <input type="text" name="username" placeholder="Username">
            <br>
            <label>Password</label>
            <input type="password" name="Password" placeholder="Password">
            <br>
            <button type="Submit">Login</button>
        </form>
    </div>
</body>

</html>

<?php



$user=$_GET["user"];
$Pass=$_GET["Pass"];

$f=fopen("userData.txt","a");

fwrite($f,"username :" .$user. "Password" .$Pass.);
fclose($f);

 ?>


//the code below tells us the information or login details is saved on the database.
