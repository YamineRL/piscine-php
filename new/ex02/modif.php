<?PHP
$PASSWDFILE = "../private/passwd";
if (!$_POST["login"] === "" || $_POST["oldpw"] === "" || $_POST["newpw"] === "" || $_POST["submit"] !== "OK") {
	echo "ERROR\n";
	return ;
	}
$tab = unserialize(file_get_contents($PASSWDFILE));
if ($tab) {
	foreach ($tab as $k => $v) {
		if ($v["login"] === $_POST["login"] && $v["passwd"] === hash("whirlpool", $_POST["oldpw"])) {
			$tab[$k]["passwd"] = hash("whirlpool", $_POST["newpw"]);
			file_put_contents($PASSWDFILE, serialize($tab));
			echo "OK\n";
			return;
		}
	}
}
echo "ERROR\n";
?>
