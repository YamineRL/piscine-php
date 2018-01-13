<?PHP
$PASSWDPATH = "../private/";
$PASSWDFILE = "../private/passwd";
function 	is_error() {
	echo "ERROR\n";
	exit();
}
if ($_POST["login"] === "" || $_POST["passwd"] === "" || $_POST["submit"] !== "OK")
	is_error();
if (!file_exists($PASSWDPATH))
	mkdir($PASSWDPATH);
if (!file_exists($PASSWDFILE))
	file_put_contents($PASSWDFILE, null);
$tab = unserialize(file_get_contents("../private/passwd"));
if ($tab) {
	foreach($tab as $k => $v) {
		if ($v["login"] === $_POST["login"])
			is_error();	
	}
}
$logintmp["login"] = $_POST["login"];
$logintmp["passwd"] = hash("whirlpool", $_POST["passwd"]);
$tab[] = $logintmp;
file_put_contents($PASSWDFILE, serialize($tab));
echo "OK\n";
?>
