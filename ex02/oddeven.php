#!/usr/bin/php
<?php
print("Entrez un nombre: ");
$input = fgets(STDIN);
if (is_numeric($input) == 1){
if ($input % 2 == 0)
	print("Le chiffre $input est Pair\n");
else
	print("Le chiffre $input est Impair\n");
}
else
	print("$input n'est pas un chiffre\n");
?>

