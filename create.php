<?php
/** @var mysqli $db */
$show =  $_POST['showNaam'];
require_once "backend.php";
if(isset($_POST['submit'])) {
    $number = $_POST['amount'];

    function generate($db ,$showNaam)
    {

        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 5; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $wachtwoord =  implode($pass);
        $query = "INSERT INTO shows (show_naam, wachtwoord) VALUE('$showNaam', '$wachtwoord')";
        mysqli_query($db, $query);
    }

    for ($i = 0; $i < $number; $i++) {
        generate($db ,$show);
    }
}

?>

<form action = "" method="post">
    <input type = "text" name = "showNaam" placeholder="Naam show">
    <br>
    <input type = "number" name = "amount" placeholder="Hoeveel codes?">
    <input type = "submit" name = "submit">


</form>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

