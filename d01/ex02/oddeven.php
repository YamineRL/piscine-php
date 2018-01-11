#!/usr/bin/php
<?php

$fd = fopen("php://stdin", "r");
while ($fd && !feof($fd)) {
	print("Entrez un nombre: ");
	$input = fgets($fd);
if ($input) {
	$input = str_replace("\n", "", $input);
	if (is_numeric($input)) {
		if ($input % 2 == 0){
			print("Le chiffre $input est Pair\n");
		} else {
			print("Le chiffre $input est Impair\n");
	}
} else {
	print("$input n'est pas un chiffre\n");
	}}}
fclose($fd);
print("\n");
?>
