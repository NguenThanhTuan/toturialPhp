<?php 
	$url = 'http://localhost:88/toturialPhp/PHP/40_Bai/';
	$url = parse_url($url);
	echo 'Scheme: '.$url['scheme'].'<br>';
	echo 'Host: '.$url['host'].'<br>';
	echo 'Path: '.$url['path'].'<br>';

 ?>