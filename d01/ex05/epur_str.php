#!/usr/bin/php
<?php
if ($argc == 2) {
	$tab = array_filter(explode(" ", $argv[1]));
	print(implode(" ", $tab) . "\n");
	}
?>
