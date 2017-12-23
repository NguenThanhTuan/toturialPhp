<?php 
	if (!empty($_SERVER['HTTPS'])) 
	{
		echo 'Page HTTPS';
	}
	else
	{
		echo 'Page HTTP';
	}
?>