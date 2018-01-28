<?php
if(!isset($_COOKIE["naam"])) {
     echo "Welkom!";
} else {
     echo "Welkom terug, " . $_COOKIE["naam"];
}
?>