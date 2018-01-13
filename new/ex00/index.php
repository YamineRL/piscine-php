<?PHP
session_start();
if ($_GET["submit"] === "OK") {
	$_GET["login"] = $_SESSION["login"];
	$_GET["passwd"] = $_SESSION["passwd"];
}
?>
<html>
	<head>
		<title>First Form</title>
	</head>
	<body>
		<form action="index.php" method="GET">
			Identifiant: <input type="text" name="login"/>
			<br>
			Mot de passe: <input type="password" name="passwd">
			<input type="submit" value="OK"/>
		</form>		
	</body>
</html>
