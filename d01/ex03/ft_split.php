#!/usr/bin/php
<?PHP

function ft_split($input) {
	$tab = array_filter(explode(" ", $input));
	sort($tab);
	return $tab;
	}
?>
