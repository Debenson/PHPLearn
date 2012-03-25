<?php
$ary = array(1, 2, 3);
foreach ($ary as & $i) {
	$i *= 2;
	print $i . "<br/>";
}
?>