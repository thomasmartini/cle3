<?php
session_start();
/** @var mysqli $db */
require_once "backend.php";

if (isset($_POST['submit'])) {
    //Retrieve values (email safe for query)
    $code = mysqli_escape_string($db, $_POST['wachtwoord']);
    $password = $_POST['wachtwoord'];

    //Get password & name from DB
    $query = "SELECT *
              FROM shows
              WHERE wachtwoord = '$code'";
    $result = mysqli_query($db, $query) or die('Error: ' . $query);
    $user = mysqli_fetch_assoc($result);

//if password is correct, redirect to main page
    if ($user) {
        $_SESSION['loggedInUser'] = [
            'wachtwoord' => $user['wachtwoord'],
        ];
        header("Location: main.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="flex-container">
    <h1>Theather live</h1>
    <form action = "" method="POST">
        <input type="text" id="wachtwoord" name="wachtwoord" placeholder="Vul hier uw inlog code in"><br>
        <input type="submit" name="submit" value="deelnemen">
    </form>
</div>
</body>
</html>