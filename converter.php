<?php
	$im = new imagick('doc1.pdf[0]');
	$im->setImageFormat('jpg');
	header('Content-Type: image/jpeg');
	echo $im;
?>