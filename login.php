<!DOCTYPE html>
<?php
session_start();
/** @var mysqli $db */
require_once "backend.php";
if (isset($_POST["submit"])){
    $toegangsCode = mysqli_escape_string($db, $_POST['toegangscode']);

    "SELECT showNaam 
    FROM login
    WHERE toegangscode = '$toegangsCode' ";
}
?>
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
    <form>
        <input type="text" id="loginCode" name="loginCode" placeholder="Vul hier uw inlog code in"><br>
        <input type="text" id="chatName" name="chatName" placeholder="Vul hier een naam in"><br>
        <input type="submit" value="deelnemen">
    </form>
</div>
</body>
</html>