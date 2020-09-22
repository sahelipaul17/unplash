<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>

<?php
SESSION_start();
unset($_POST["fullname"]);
unset($_POST["email"]);
header("Location:login.php");
?>
</body>
</html>






