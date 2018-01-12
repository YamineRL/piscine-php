<?php
foreach ($_GET as $key => $value) {
	if ($key == "action" && $value == "set") {
		if ($_GET["name"] && $_GET["value"])
			setcookie($_GET["name"], $_GET["value"], time()+3600);
			}
			else if ($key == "action" && $value == "get" && $_GET["name"] && $_COOKIE[$_GET["name"]]) {
				echo $_COOKIE[$_GET["name"]] . "\n";
			}
			else if ($key == "action" && $value == "del") {
				if ($_GET["name"])
					setcookie($_GET["name"], "");
			}
}
?>
