<?php
// вычислить p!
if(!isset($_GET['p']) || ($p = $_GET['p'])=='') {
	echo "Введите натуральное число!<br>";
	exit;
}
$f = factorial($p);
echo "$f";

function Factorial($i) {
	if($i<2) return 1;
	$k=$i*factorial($i-1);
	return $k;
}
?>