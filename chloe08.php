<?php
	// 任何網頁接收到的資料 => 一律都是字串
	$a = '81chole88'; $b = '6'; $d = true;  // false => 0
	$e = 10; $f = 0;
	$c = $a + $b + $d;
	$g = $e / $f;
	$h = $f / $f;

	echo $c . '<br />';
	echo $g . '<br />';
	echo $h . '<br />';  // 0/0 => NAN => Not A Number
	echo gettype($g) . '<br />';
	echo gettype($h);

?>