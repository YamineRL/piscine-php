#!/usr/bin/php	
<?PHP
if ($argc <= 1) {
	return ;
}
else
	$tab = array_filter(explode(" ", $argv[1]));
	print(implode(" ", $tab) . "\n");
?>
