<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="stylesheet/style.css">

    <title>Login Page </title>
</head>
<?php
include "function.php";
$_SESSION["cart"]=[];
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (isset($_POST['Username']) && isset($_POST['Password'])) {

        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        };
        $Username = validate($_POST['Username']);
        $Password = validate($_POST['Password']);

        if (empty($Username)) {
            header("Location:index.php?=User Name is required");
            exit();
        } elseif (empty($Password)) {
            header("Location:index.php?=Password is required");
            exit();
        } else {
            echo "Valid input";
            header("Location:index.php");
            exit();
        };
    }
};

?>

<body>
    <div class="login_container">


        <form action="login.php" method="post" class="login-form">
            <h2> Login</h2>
            <?php if (isset($_GET['error'])) { ?>
            <p class="error">
                <?php echo $_GET['error']; ?> </p>
            <?php } ?>

            <label>Username</label>
            <input type="text" name="Username" placeholder="Username">
            <br>
            <label>Password</label>
            <input type="password" name="Password" placeholder="Password">
            <br>
            <button type="Submit">Login</button>
        </form>
    </div>
</body>

</html>
