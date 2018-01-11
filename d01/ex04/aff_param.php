#!/usr/bin/php
<?PHP
if ($argc <= 1) {
	return ;
}
unset($argv[0]);
foreach ($argv as $k => $v) {
	echo $v . "\n";
}
?>
