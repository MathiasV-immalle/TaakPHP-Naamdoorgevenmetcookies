<h1>Registratie voltooid!</h1>
<p>Uw naam zal worden opgeslagen in een Cookie.<p>
<form action="groet.php">
	<input type="submit" value="Groet!"/>
</form>
<?php
setcookie("naam", $_GET[naam], time() + (86400 * 30));
?>