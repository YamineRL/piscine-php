#!/usr/bin/php
<?PHP
if ($argc <= 1) {
	return ;
}
else
	$words = preg_split('/\s+/', $argv[1]);
	print(implode(" ", $words) . "\n");
?>
