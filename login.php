<?php
session_start();

if (isset($_POST["user"]) && isset($_POST["pass"])) {
    unset($_SESSION["user"]);   //logout current user.
    if ($_POST["pass"] === "php123") {
        $_SESSION["success"] = "Logged in.";
        $_SESSION["user"] = $_POST["user"];
        header("Location: app.php");
        return;     //return is important!
    } else {
        $_SESSION["error"] = "Incorrect password.";
        header("Location: login.php");
        return;
    }
}
?>

<html>

<head>
    <style>
        form * {
            margin: 4px;
        }
    </style>
</head>

<body style="font-family: sans-serif;">
    <h1>Login Application</h1>

    <?php
    if (isset($_SESSION["error"])) {
        echo '<p style="color: red">' . $_SESSION["error"] . "</p>\n";
        unset($_SESSION["error"]);
    }
    ?>

    <form method="post">
        <label for="user">Username</label>
        <input type="text" name="user" />
        <br>
        <label for="pass">Password</label>
        <input type="text" name="pass" />
        <br>
        <input type="submit" value="Login" />
    </form>
</body>

</html>