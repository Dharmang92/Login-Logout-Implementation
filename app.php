<?php
session_start();
?>

<html>

<head>
    <title>Login App</title>
</head>

<body style="font-family: sans-serif;">
    <h1>Cool Application</h1>
    <?php
    if (isset($_SESSION["success"])) {
        echo '<p style="color: green">' . $_SESSION["success"] . "</p>\n";
        unset($_SESSION["success"]);
    }
    if (!isset($_SESSION["user"])) {
        echo "Please " . "<a href='login.php'>log in.</a>";
    } else {
        echo "<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, consequuntur!</p>
        <p>Please <a href='logout.php'>log out</a> when you are done.</p>";
    }
    ?>
</body>

</html>