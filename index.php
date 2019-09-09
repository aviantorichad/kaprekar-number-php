<?php

echo 'kaprekar number <br>';
echo '?number=xxxx <hr>';

$total = 0;
$number = $_GET['number']??0;
$last = $number;


while($total != $last) {
	$last = $total;
	$split = str_split($number);

	rsort($split);
	$besar = implode('', $split);

	sort($split);
	$kecil = implode('', $split);


	$total = $besar - $kecil;

	echo $besar.' - '. $kecil .' = '. $total . '<br>';
	$number = $total;
}
