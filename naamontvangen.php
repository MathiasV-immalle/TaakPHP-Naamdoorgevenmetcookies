<h1>Registratie...</h1>

<?php
setcookie("naamcookie", $_POST["naam"], time() + (86400 * 30));
if(isset($_COOKIE["naamcookie"])){
    echo "bedankt om uw naam in te vullen!<br>";
    echo "Uw naam is opgeslagen in een Cookie.";
}else{
    echo "reload de pagina om uw naam op te slagen in een cookie.";
}
?>
<br><br><a href="groet.php">Groet!</a>